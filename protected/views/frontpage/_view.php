<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foodThumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->foodThumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foodDesc')); ?>:</b>
	<?php echo CHtml::encode($data->foodDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cakesThumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->cakesThumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cakesDesc')); ?>:</b>
	<?php echo CHtml::encode($data->cakesDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dessertThumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->dessertThumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dessertDesc')); ?>:</b>
	<?php echo CHtml::encode($data->dessertDesc); ?>
	<br />


</div>