<?php

class TransaksiController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionPesan()
	{
		//print_r($_POST);
		//die();
		foreach($_POST['produk'] as $k){
			echo '<h4>'.$k['ucapan'].'<h4>';
			echo '<p>Harga '.$k['harga'].'<br>';
			echo  'Jumlah '.$k['jumlah'].'<br>';
			echo  'Alamat '.$k['alamat'].'<hr><br><br>';
	}
		
		/*
		$itempesan = $_POST['produk'];
		foreach($itempesan as $id=>$items){
		
			//bisa diakses dengan $items['ucapan']
			//$k = $items['ucapan'];
			//sama seperti di program yang saya berikan kemarin

		}*/
		
		require_once 'protected/extensions/Midtrans/Midtrans.php';

		//Set Your server key
		Midtrans\Config::$serverKey = Yii::app()->params['midtrans-serverkey'];

		// Uncomment for production environment
		// Config::$isProduction = true;

		// Enable sanitization
		Midtrans\Config::$isSanitized = true;

		// Enable 3D-Secure
		Midtrans\Config::$is3ds = true;

		//susun datanya

		$total = 0;
		$itempesan = $_POST['produk'];
		foreach($itempesan as $id=>$items){
			$total +=($items['jumlah'] * $items['harga']);
		}
		
		$user = User::model()->findByPk(Yii::app()->user->getId());
		$id = substr(md5($user->userId),0,5);
		$orderid = date('YmdHis-').$id;

		$tran = new Transaksi();
		$tran->userId 	= $user->userId;
		$tran->status= "pending";
		$tran->tglOrder	= date('Y-m-d H:i:s'); 
		$tran->kodeBayar 	= $orderid; 
		$tran->totalTransaksi= $total;
		$tran->save();
		
		$mid_items = array();
		foreach($itempesan as $id=>$items){
			$dt = new DetailTransaksi();
			$pdk = Produk::model()->findByPk($id);
			$dt->produkId 	= $pdk->produkId; 
			$dt->transaksiId= $tran->transaksiId;
			$dt->jumlah		= $items['jumlah'];
			$dt->harga		= $pdk->hargaProduk;
			$dt->total		= ($items['jumlah'] * $pdk->hargaProduk);
			$dt->ucapan 	= $items['ucapan'];
			$dt->alamat 	= $items['alamat'];
			$dt->save();
			
			$mid_items[] = array(
				'id' => $pdk->produkId,
				'price' => $pdk->hargaProduk,
				'quantity' => $items['jumlah'],
				'name' => $pdk->namaProduk
			);
			$itempesan[$id]['detail_transaksi'] = $dt;
		}
		
		
		$produk = Produk::model()->findByPk($id);
		$transaction_details = array(
			'order_id' => $orderid,
			'gross_amount' => $total, // no decimal allowed for creditcard
		);
		// Optional
		$item_details = $mid_items;
		// Optional
		
		$customer_details = array(
			'first_name'    => $user->userId,
			'last_name'     => $user->userNama,
			'email'         => "marta@gmail.com",
			'phone'         => "081122334455",
			'billing_address'  => 'Jl. Jalan',
			'shipping_address' => 'Jl. Pengiriman'
		);
		// Fill transaction details
		$transaction = array(
			'transaction_details' => $transaction_details,
			'customer_details' => $customer_details,
			'item_details' => $item_details,
		);

		$snapToken = Midtrans\Snap::getSnapToken($transaction);
	
		//echo "snapToken = ".$snapToken;
		$this->render('pesan',array(
			'token'=>$snapToken,
			'produk'=>$itempesan
		));
		
		
	}
}