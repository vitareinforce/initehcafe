<?php
$this->breadcrumbs=array(
	'Uploads',
);

$this->menu=array(
array('label'=>'Create Uploads','url'=>array('create')),
array('label'=>'Manage Uploads','url'=>array('admin')),
);
?>

<h1>Uploads</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
