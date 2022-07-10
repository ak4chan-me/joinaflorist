<?php
/* @var $this KategoriController */
/* @var $data Kategori */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategoriId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kategoriId), array('view', 'id'=>$data->kategoriId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaKategori')); ?>:</b>
	<?php echo CHtml::encode($data->namaKategori); ?>
	<br />


</div>