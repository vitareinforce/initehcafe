<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'Title',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'Facebook',array('class'=>'span5','maxlength'=>1000)); ?>

		<?php echo $form->textFieldRow($model,'Twitter',array('class'=>'span5','maxlength'=>1000)); ?>

		<?php echo $form->textFieldRow($model,'Youtube',array('class'=>'span5','maxlength'=>1000)); ?>

		<?php echo $form->textFieldRow($model,'adminMail',array('class'=>'span5','maxlength'=>1000)); ?>

		<?php echo $form->textFieldRow($model,'Phone',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
