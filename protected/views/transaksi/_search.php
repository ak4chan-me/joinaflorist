<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'transaksiId'); ?>
		<?php echo 		$form->textField($model,'transaksiId',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo 		$form->textField($model,'userId',array('class'=>"form-control", 'size'=>60,'maxlength'=>100))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'status'); ?>
		<?php echo 		$form->textField($model,'status',array('class'=>"form-control", 'size'=>20,'maxlength'=>20))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tglOrder'); ?>
		<?php echo 		$form->textField($model,'tglOrder',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'kodeBayar'); ?>
		<?php echo 		$form->textField($model,'kodeBayar',array('class'=>"form-control", 'size'=>60,'maxlength'=>100))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'totalTransaksi'); ?>
		<?php echo 		$form->textField($model,'totalTransaksi',array('class'=>"form-control"))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->