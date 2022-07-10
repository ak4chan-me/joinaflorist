<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	'Create',
);
?>

<h1>Tambah Pembayaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>