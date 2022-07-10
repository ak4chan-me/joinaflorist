<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->transaksiId=>array('view','id'=>$model->transaksiId),
	'Update',
);
?>

<h1>Mengubah Transaksi <?php echo $model->transaksiId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>