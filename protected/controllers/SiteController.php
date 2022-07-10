<?php

class SiteController extends Controller
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
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	
	public function actionPesan($id)
	{
		require_once 'protected/extensions/midtrans/Midtrans.php';

	//Set Your server key
	Midtrans\Config::$serverKey = Yii::app()->params['midtrans-serverkey'];

	// Uncomment for production environment
	// Config::$isProduction = true;

	// Enable sanitization
	Midtrans\Config::$isSanitized = true;

	// Enable 3D-Secure
	Midtrans\Config::$is3ds = true;

	// Uncomment for append and override notification URL
	// Config::$appendNotifUrl = "https://example.com";
	// Config::$overrideNotifUrl = "https://example.com";

	
	// Required
	//print_r($id);
	//die();
	// Required
	
	$produk = Produk::model()->findByPk($id);
	$orderid = date('Ymdhis-').$id;
	$transaction_details = array(
		'order_id' => $orderid,
		'gross_amount' => $produk->hargaProduk,// no decimal allowed for creditcard
	);
	// Optional
	$item_details = array (
		array(
			'id' => $produk->produkId,
			'price' => $produk->hargaProduk,
			'quantity' => 1,
			'name' => $produk->namaProduk
		),
	);
	// Optional
	$user = User::model()->findByPk(Yii::app()->user->getId());
	$customer_details = array(
		'first_name'    => $user->userId,
		'last_name'     => $user->userNama,
		'email'         => "marta@gmail.com",
		'phone'         => "081122334455",
		'billing_address'  => 'Jl. Jalan',
		'shipping_address' => 'Jl. Pening'
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
			'produk'=>$produk
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		
		$mygoogle = $this->getmygoogle();
		$this->render('login',
				array(
					'model'=>$model,
					'klien'=>$mygoogle['klien']
				)
		);
	}

	/**
	 * Displays the login page
	 */
	public function actionRegistrasi()
	{
		//echo Yii:app->user->PelangganId;
		$this->render('registrasi');
	}

	/**
	 * Displays the login page
	 */
	public function actionValidasi()
	{
		$mygoogle = $this->getmygoogle();
		$akun = $mygoogle['akun'];
		// cek apakah berhasil login 
		if($mygoogle['islogin']){			
			$email =  $akun->email;
			$name  =  $akun->name;
			$id    =  $akun->id;
			$users= User::model()->findByPk($email);
			// cek apakah sudah pernah terdaftar? kalau belum daftarkan
			if($users==null){
				$model=new User;
				$model->userId = $email;
				$model->userPassword = md5($id);
				$model->userNama = $name;
				$model->userGroup = 2;
				$model->save();
			}
			
			$model=new LoginForm;
			$model->username=$email;
			$model->password=$id;
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				$this->redirect(Yii::app()->user->returnUrl);
				//$this->redirect(array('registrasi'));
			}
			else{
				$this->redirect(array('login'));
			}
		}
		else{
			$this->redirect(array('login'));
		}
	}

	private function getmygoogle(){
		require_once 'protected/extensions/google/vendor/autoload.php';
  
		// init configuration
		$clientID = Yii::app()->params['google-clientID'];
		
		$clientSecret = Yii::app()->params['google-clientSecret'];
		$redirectUri = 'https://localhost/joinaflorist/index.php?r=site/validasi';
		   
		// create Client Request to access Google API
		$client = new Google_Client();
		$client->setClientId($clientID);
		$client->setClientSecret($clientSecret);
		$client->setRedirectUri($redirectUri);
		$client->addScope("email");
		$client->addScope("profile");
		 
		$akun = null;
		$islogin=false;
		// authenticate code from Google OAuth Flow
		if (isset($_GET['code'])) {
		  $islogin=true;
		  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
		  $client->setAccessToken($token['access_token']);
		   
		  // get profile info
		  $google_oauth = new Google_Service_Oauth2($client);
		  $akun = $google_oauth->userinfo->get();
		  
		  // now you can use this profile info to create account in your website and make user logged in.
		} 
		/*
		else {
		  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
		}*/
		
		return array(
			'akun'=>$akun,
			'klien'=>$client,
			'islogin'=>$islogin
		);
	}
	
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}