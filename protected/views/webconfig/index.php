<?php
$this->breadcrumbs=array(
	'Webconfigs',
);

$this->menu=array(
array('label'=>'Create Webconfig','url'=>array('create')),
array('label'=>'Manage Webconfig','url'=>array('admin')),
);
?>

<h1>Webconfigs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
