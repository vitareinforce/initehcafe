<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
	<?php echo CHtml::encode($data->Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facebook')); ?>:</b>
	<?php echo CHtml::encode($data->Facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Twitter')); ?>:</b>
	<?php echo CHtml::encode($data->Twitter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Youtube')); ?>:</b>
	<?php echo CHtml::encode($data->Youtube); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminMail')); ?>:</b>
	<?php echo CHtml::encode($data->adminMail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Phone')); ?>:</b>
	<?php echo CHtml::encode($data->Phone); ?>
	<br />


</div>