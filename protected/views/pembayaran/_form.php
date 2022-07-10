<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pembayaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'transaksiId'); ?>
		<?php echo 		$form->textField($model,'transaksiId',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'transaksiId'); ?>
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
		<?php echo $form->labelEx($model,'tglBayar'); ?>
		<?php echo 		$form->textField($model,'tglBayar',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'tglBayar'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'statusBayar'); ?>
		<?php echo 		$form->textField($model,'statusBayar',array('class'=>"form-control", 'size'=>50,'maxlength'=>50))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'statusBayar'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'totalBayar'); ?>
		<?php echo 		$form->textField($model,'totalBayar',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'totalBayar'); ?>
		</small>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->