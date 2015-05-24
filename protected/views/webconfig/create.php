<?php
$this->breadcrumbs=array(
	'Webconfigs'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Webconfig','url'=>array('index')),
array('label'=>'Manage Webconfig','url'=>array('admin')),
);
?>

<h1>Create Webconfig</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>