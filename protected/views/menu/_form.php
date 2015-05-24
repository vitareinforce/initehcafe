<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'menu-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->labelEx($model,'category'); ?>
	<?php switch($model->category) { 
			case '1':
				echo '
						<select name="Menu[category]" >
				 		<option value="1">Food</option>
		                <option value="2">Cake</option>
		                <option value="3">Dessert</option>     
		        		</select>';
				break;
			case '2':
				echo '
						<select name="Menu[category]" >
				 		<option value="2">Cake</option>
		                <option value="1">Food</option>
		                <option value="3">Dessert</option>     
		        		</select>';
				break;
			case '3':
				echo '
						<select name="Menu[category]" >
				 		<option value="3">Desert</option>
		        		<option value="1">Food</option>
		                <option value="2">Cake</option>
		                </select>';
				break;
			default:
				echo '
						<select name="Menu[category]" >
				 		<option value="1">Food</option>
		                <option value="2">Cake</option>
		                <option value="3">Dessert</option>   
		        		</select>';
				break;
	}
	?>
	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>100)); ?>
	
	
	<?php echo $form->labelEx($model,'desc'); ?>
	<?php echo "Image Upload : " .CHtml::link("Upload",Yii::app()->homeurl. "/uploads/create",array('target'=>'_blank')) ;?>
	<?php $this->widget('application.extensions.tinymce.ETinyMce',
			array(
				'model'=>$model,
				'attribute'=>'desc',
				'editorTemplate'=>'full',
				'useCompression'=>false,
				'htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'tinymce'),

				'options' => array(
							'theme_advanced_buttons1' =>
							'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,advhr,|,sub,sup,|,bullist,numlist,|,image,',
							'theme_advanced_buttons2' => 'tablecontrols,|,removeformat,visualaid,|,formatselect,fontselect,fontsizeselect,|,cut,copy,paste,pastetext,pasteword,|,search,replace,',
							'theme_advanced_buttons3' => '',
							'theme_advanced_buttons4' => '',
							'theme_advanced_toolbar_location' => 'top',
							'theme_advanced_toolbar_align' => 'left',
							'theme_advanced_statusbar_location' => 'none',
							'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
															15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
							)
				)
			);?>
			
	<?php echo $form->textFieldRow($model,'price',array('class'=>'span5','maxlength'=>100)); ?>
			
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
