<?php
/* @var $this ProdukController */
/* @var $model Produk */

$this->breadcrumbs=array(
	'Produks'=>array('index'),
	'Create',
);
?>

<h1>Tambah Produk</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>