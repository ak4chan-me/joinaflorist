<?php
/* @var $this DetailTransaksiController */
/* @var $data DetailTransaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('detailId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->detailId), array('view', 'id'=>$data->detailId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produkId')); ?>:</b>
	<?php echo CHtml::encode($data->produkId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksiId')); ?>:</b>
	<?php echo CHtml::encode($data->transaksiId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ucapan')); ?>:</b>
	<?php echo CHtml::encode($data->ucapan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	*/ ?>

</div>