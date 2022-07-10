<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	$model->kategoriId=>array('view','id'=>$model->kategoriId),
	'Update',
);
?>

<h1>Mengubah Kategori <?php echo $model->kategoriId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>