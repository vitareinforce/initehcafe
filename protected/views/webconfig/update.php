<?php
$this->breadcrumbs=array(
	'Webconfigs'=>array('index'),
	$model->Title=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Webconfig','url'=>array('index')),
	array('label'=>'Create Webconfig','url'=>array('create')),
	array('label'=>'View Webconfig','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Webconfig','url'=>array('admin')),
	);
	?>

	<h1>Update Webconfig <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>