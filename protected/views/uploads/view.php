<div class="container">
<br />
<br />
<br />
<br />
<?php
$this->breadcrumbs=array(
	'Uploads'=>array('index'),
	$model->id,
);

$this->menu=array(
		array('label'=>'Update Images','url'=>array('update','id'=>$model->id)),
		array('label'=>'Manage Images','url'=>array('admin')),
);
?>

<h1>View Uploads #<?php echo $model->id; ?></h1>

<?php 
 	echo CHtml::image(Yii::app()->request->baseUrl."/images/uploads/".$model->image,$model->desc)."<br />";
	echo $model->desc; 
?>
<br />
<br />
<?php echo "Image Link : ".CHtml::link(Yii::app()->getBaseUrl(true).'/images/post/'.$model->image,Yii::app()->getBaseUrl(true).'/images/uploads/'.$model->image); ?>
</div>