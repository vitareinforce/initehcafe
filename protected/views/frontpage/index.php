<?php
$this->breadcrumbs=array(
	'Frontpages',
);

$this->menu=array(
array('label'=>'Create Frontpage','url'=>array('create')),
array('label'=>'Manage Frontpage','url'=>array('admin')),
);
?>

<h1>Frontpages</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
