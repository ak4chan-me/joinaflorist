<?php
/* @var $this PembayaranController */
/* @var $data Pembayaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bayarId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bayarId), array('view', 'id'=>$data->bayarId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksiId')); ?>:</b>
	<?php echo CHtml::encode($data->transaksiId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeBayar')); ?>:</b>
	<?php echo CHtml::encode($data->kodeBayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglBayar')); ?>:</b>
	<?php echo CHtml::encode($data->tglBayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusBayar')); ?>:</b>
	<?php echo CHtml::encode($data->statusBayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalBayar')); ?>:</b>
	<?php echo CHtml::encode($data->totalBayar); ?>
	<br />


</div>