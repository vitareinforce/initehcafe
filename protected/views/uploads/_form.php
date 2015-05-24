<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-image-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->labelEx($model,'image'); ?>
	<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>256)); ?>
	<br />
	<?php echo $form->fileField($model, 'image',array('size'=>60,'maxlength'=>256));?>
	<?php echo $form->error($model,'image'); ?>
	<?php echo $form->labelEx($model,'desc'); ?>
	<?php echo $form->textField($model,'desc'); ?>
	<?php echo $form->error($model,'desc'); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
