<?php
$this->breadcrumbs=array(
	'Uploads'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Uploads','url'=>array('index')),
array('label'=>'Manage Uploads','url'=>array('admin')),
);
?>
<div class="container">
<br />
<br />
<br />
<br />

<h1>Create Uploads</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>