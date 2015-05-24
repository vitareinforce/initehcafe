<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>256)); ?>

		<?php switch($model->roles_id) { 
			case '0':
				echo $form->labelEx($model,'roles_id');
				echo '
						<select name="Users[roles_id]" >
						<option value="0">Regular User</option>     
				        <option value="1">Administrator</option>
				        </select>';
				break;
			case '1':
				if(((Yii::app()->user->id) != ($model->id)) && Yii::app()->user->roles == 1) {
				echo $form->labelEx($model,'roles_id');
				echo '
						<select name="Users[roles_id]" >
						<option value="1">Administrator</option>
				        <option value="0">Regular User</option>     
				        </select>';
				}
				break;
			default:
				echo $form->labelEx($model,'roles_id');
				echo '
						<select name="Users[roles_id]" >
						<option value="0">Regular User</option>     
				        <option value="1">Administrator</option>
				        </select>';
				break;
				break;
		}
		?>
		<?php echo $form->error($model,'roles_id'); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
