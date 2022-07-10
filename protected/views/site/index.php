<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;


$data2 = Produk::model()->with(array('kategori'))->findAll();
//print_r($data2);
?>
<h3>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h3>
<div class="row row-cols-1 row-cols-md-3">
<?php
$template = '
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col ">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <img src="images/%s" class="card-img-top" alt="...">
          <h5 class="card-title">%s</h5>
          <p class="card-text">Kategori : %s</p>
          <p class="card-text">Harga : Rp. %s</p>
          <p class="card-text">Deskripsi : %s</p>
      </div>
    <a href="%s" class="btn btn-primary">Pesan</a>
  </div>
</div>
</div>
';
foreach($data2 as $m){
    echo sprintf($template,
    $m->gambar,
    $m->namaProduk,
    $m->kategori->kategoriId,
    $m->hargaProduk,
    $m->deskripsi,
    Yii::app()->createUrl('site/pesan',array('id'=>$m->produkId))
);
}
?>
</div>