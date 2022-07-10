Anda akan memesan:
<?php 

$m = $produk;
$template = '
<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="col">
  <div class="card" style="width: 20rem;">
  <div class="card-body">
      <img src="images/%s" class="card-img-top" alt="...">
            <h5 class="card-title">%s</h5>
            <p class="card-text">Kategori : %s</p>
            <p class="card-text">Harga : Rp. %s</p>
            <p class="card-text">Deskripsi : %s</p>
          </div>
      <a href="#" id="pay-button" class="btn btn-primary">Bayar</a>
    </div>
</div>
</div>
';
echo sprintf($template,
    $m->gambar,
    $m->namaProduk,
    $m->kategori->kategoriId,
    $m->hargaProduk,
    $m->deskripsi
);
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