<?php
/* @var $this ProdukController */
/* @var $model Produk */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'produkId'); ?>
		<?php echo 		$form->textField($model,'produkId',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'kategoriId'); ?>
		<?php echo 		$form->textField($model,'kategoriId',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'namaProduk'); ?>
		<?php echo 		$form->textField($model,'namaProduk',array('class'=>"form-control", 'size'=>60,'maxlength'=>100))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'hargaProduk'); ?>
		<?php echo 		$form->textField($model,'hargaProduk',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'gambar'); ?>
		<?php echo 		$form->textField($model,'gambar',array('class'=>"form-control", 'size'=>60,'maxlength'=>100))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo 		$form->textField($model,'deskripsi',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->