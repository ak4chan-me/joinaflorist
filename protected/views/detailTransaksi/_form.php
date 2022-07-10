<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detail-transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'produkId'); ?>
		<?php echo 		$form->textField($model,'produkId',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'produkId'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'transaksiId'); ?>
		<?php echo 		$form->textField($model,'transaksiId',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'transaksiId'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo 		$form->textField($model,'jumlah',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'jumlah'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo 		$form->textField($model,'harga',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'harga'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo 		$form->textField($model,'total',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'total'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'ucapan'); ?>
		<?php echo 		$form->textField($model,'ucapan',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'ucapan'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo 		$form->textField($model,'alamat',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'alamat'); ?>
		</small>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->