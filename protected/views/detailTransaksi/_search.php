<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'detailId'); ?>
		<?php echo 		$form->textField($model,'detailId',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'produkId'); ?>
		<?php echo 		$form->textField($model,'produkId',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'transaksiId'); ?>
		<?php echo 		$form->textField($model,'transaksiId',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'jumlah'); ?>
		<?php echo 		$form->textField($model,'jumlah',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'harga'); ?>
		<?php echo 		$form->textField($model,'harga',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'total'); ?>
		<?php echo 		$form->textField($model,'total',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ucapan'); ?>
		<?php echo 		$form->textField($model,'ucapan',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo 		$form->textField($model,'alamat',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->