<?php
/* @var $this ProdukController */
/* @var $data Produk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('produkId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->produkId), array('view', 'id'=>$data->produkId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategoriId')); ?>:</b>
	<?php echo CHtml::encode($data->kategoriId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaProduk')); ?>:</b>
	<?php echo CHtml::encode($data->namaProduk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hargaProduk')); ?>:</b>
	<?php echo CHtml::encode($data->hargaProduk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />


</div>