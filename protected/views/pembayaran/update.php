<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	$model->bayarId=>array('view','id'=>$model->bayarId),
	'Update',
);
?>

<h1>Mengubah Pembayaran <?php echo $model->bayarId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>