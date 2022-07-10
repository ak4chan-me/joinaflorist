<br>
<form method="post" action="<?php echo Yii::app()->createUrl('transaksi/pesan');?>">
<ul class="list-group">
	<li class="list-group-item active">
		<div class="row">
			<div class="col-2">
				Nama 
			</div>
			<div class="col-2">
				Harga
			</div>
			<div class="col-3">
				Jumlah
			</div>
			<div class="col-3">
				Ucapan
			</div>
			<div class="col-2">
				Alamat
			</div>
		</div>
	</li>
<?php 
$produk = Produk::model()->findAll();
foreach($produk as $item){
	$i = $item->produkId;
	?>
	<li class="list-group-item">
		<div class="row">
			<div class="col-2">
				<?php echo $item->namaProduk;?>
			</div>
			<div class="col-2">
				<?php echo $item->hargaProduk;?>
			</div>
			<div class="col-3">
				<input type="number" value="0" name="produk[<?php echo $i?>][jumlah]">
				<input type="text" value="<?php echo $item->hargaProduk?>" name="produk[<?php echo $i?>][harga]">
			</div>
			<div class="col-">
				<input type="text" value=" " name="produk[<?php echo $i?>][ucapan]">
			</div>
			<div class="col-2">
				<input type="text" value=" " name="produk[<?php echo $i?>][alamat]">
			</div>
		</div>
	</li>	
	<?php 
}
?>
	<li class="list-group-item">
		<div class="row">
			<div class="col-5">
				<input type="submit" class="btn btn-primary" value="Pesan">
			</div>
			<div class="col-3">
				
			</div>
			<div class="col-3">	
			</div>
		</div>
	</li>
</ul>
</form>