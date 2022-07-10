<?php
/* @var $this ProdukController */
/* @var $model Produk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'produk-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'htmlOptions'=>array('enctype'=>'multipart/form-data','autocomplete'=>'off'),
	'enableAjaxValidation'=>false,
	
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'kategoriId'); ?>
			<?php 
				// retrieve the models from db
				$data = Kategori::model()->findAll();

				//format models as $key=>$value with listData
				$list = CHtml::listData($data,
				'kategoriId', 'namaKategori');

				echo $form->dropDownList($model,'kategoriId',
				$list,
				array(
					'class'=>"custom-select",
					'prompt'=>'--Pilih Kategori--',
				)
				); 
			?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'kategoriId'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'namaProduk'); ?>
		<?php echo 		$form->textField($model,'namaProduk',array('class'=>"form-control", 'size'=>60,'maxlength'=>100))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'namaProduk'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'hargaProduk'); ?>
		<?php echo 		$form->textField($model,'hargaProduk',array('class'=>"form-control"))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'hargaProduk'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo 		
		$form->fileField($model,'gambar',array('class'=>"form-control",'size'=>60,'maxlength'=>100))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'gambar'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo 		$form->textField($model,'deskripsi',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'deskripsi'); ?>
		</small>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->