<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	'Create',
);
?>

<h1>Tambah Transaksi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>