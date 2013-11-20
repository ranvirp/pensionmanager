<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_husband_name')); ?>:</b>
	<?php echo CHtml::encode($data->father_husband_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_account_no')); ?>:</b>
	<?php echo CHtml::encode($data->bank_account_no); ?>
	<br />


</div>