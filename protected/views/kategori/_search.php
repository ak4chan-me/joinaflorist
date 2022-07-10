<?php
/* @var $this KategoriController */
/* @var $model Kategori */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'kategoriId'); ?>
		<?php echo 		$form->textField($model,'kategoriId',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'namaKategori'); ?>
		<?php echo 		$form->textField($model,'namaKategori',array('class'=>"form-control", 'size'=>50,'maxlength'=>50))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->