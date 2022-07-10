<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */

$this->breadcrumbs=array(
	'Detail Transaksis'=>array('index'),
	$model->detailId=>array('view','id'=>$model->detailId),
	'Update',
);
?>

<h1>Mengubah DetailTransaksi <?php echo $model->detailId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>