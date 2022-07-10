<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksiId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->transaksiId), array('view', 'id'=>$data->transaksiId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglOrder')); ?>:</b>
	<?php echo CHtml::encode($data->tglOrder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeBayar')); ?>:</b>
	<?php echo CHtml::encode($data->kodeBayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalTransaksi')); ?>:</b>
	<?php echo CHtml::encode($data->totalTransaksi); ?>
	<br />


</div>