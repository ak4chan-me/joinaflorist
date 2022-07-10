<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'userId'); ?>
		<?php echo 		$form->textField($model,'userId',array('class'=>"form-control", 'size'=>60,'maxlength'=>100))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'userId'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo 		$form->textField($model,'status',array('class'=>"form-control", 'size'=>20,'maxlength'=>20))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'status'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'tglOrder'); ?>
		<?php echo 		$form->textField($model,'tglOrder',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'tglOrder'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'kodeBayar'); ?>
		<?php echo 		$form->textField($model,'kodeBayar',array('class'=>"form-control", 'size'=>60,'maxlength'=>100))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'kodeBayar'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'totalTransaksi'); ?>
		<?php echo 		$form->textField($model,'totalTransaksi',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'totalTransaksi'); ?>
		</small>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->