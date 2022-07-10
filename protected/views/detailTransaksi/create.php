<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */

$this->breadcrumbs=array(
	'Detail Transaksis'=>array('index'),
	'Create',
);
?>

<h1>Tambah DetailTransaksi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>