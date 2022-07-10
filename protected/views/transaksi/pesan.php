<a href="#" id="pay-button" class="btn btn-primary">Bayar</a>
	  
Anda akan memesan:
<?php 
//print_r($produk);die();
foreach($produk as $items){
	$m = $items['detail_transaksi'];
$template = '
<div class="col mb-4">
    <div class="card h-100">
      <img src="images/%s" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">%s</h5>
        <p class="card-text">Kategori  : %s</p>
        <p class="card-text">Jumlah: %s</p>
        <p class="card-text">Harga : Rp. %s</p>
        <p class="card-text">Total : Rp. %s</p>
        <p class="card-text">Ucapan : %s</p>
        <p class="card-text">Alamat : %s</p>
      </div>
    </div>
  </div>
';
echo sprintf($template,
    $m->produk->produkId,
    $m->transaksi->transaksiId,
		$items['jumlah'],
    $m->harga,
		$items['jumlah']*$m->harga,
    $m->ucapan,$items['ucapan'],
    $m->alamat,$items['alamat']
	);
}
?>
<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" 
		data-client-key="<?php echo Yii::app()->params['midtrans-client-key']; ?>"></script>
<script type="text/javascript">
	document.getElementById('pay-button').onclick = function(){
		// SnapToken acquired from previous step
		snap.pay('<?php echo $token?>');
	};
</script>