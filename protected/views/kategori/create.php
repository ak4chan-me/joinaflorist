<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	'Create',
);
?>

<h1>Tambah Kategori</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>