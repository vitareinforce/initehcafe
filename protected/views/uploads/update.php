<div class="container">
<br />
<br />
<br />
<br />
<?php
$this->breadcrumbs=array(
	'Uploads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Uploads','url'=>array('index')),
	array('label'=>'Create Uploads','url'=>array('create')),
	array('label'=>'View Uploads','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Uploads','url'=>array('admin')),
	);
	?>

	<h1>Update Uploads <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
</div>