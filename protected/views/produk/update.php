<?php
/* @var $this ProdukController */
/* @var $model Produk */

$this->breadcrumbs=array(
	'Produks'=>array('index'),
	$model->produkId=>array('view','id'=>$model->produkId),
	'Update',
);
?>

<h1>Mengubah Produk <?php echo $model->produkId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>