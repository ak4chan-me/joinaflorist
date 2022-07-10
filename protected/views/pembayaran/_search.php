<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'bayarId'); ?>
		<?php echo 		$form->textField($model,'bayarId',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'transaksiId'); ?>
		<?php echo 		$form->textField($model,'transaksiId',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'kodeBayar'); ?>
		<?php echo 		$form->textField($model,'kodeBayar',array('class'=>"form-control", 'size'=>60,'maxlength'=>100))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tglBayar'); ?>
		<?php echo 		$form->textField($model,'tglBayar',array('class'=>"form-control"))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'statusBayar'); ?>
		<?php echo 		$form->textField($model,'statusBayar',array('class'=>"form-control", 'size'=>50,'maxlength'=>50))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'totalBayar'); ?>
		<?php echo 		$form->textField($model,'totalBayar',array('class'=>"form-control"))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->