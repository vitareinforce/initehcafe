<?php
$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Menu','url'=>array('index')),
array('label'=>'Create Menu','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('menu-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<br />
<br />
<br />
<br />

<h1>Manage Menus</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'menu-grid',
'dataProvider'=>$model->search(),
'columns'=>array(
		'id',
		'category',
		'name',
		'desc',
		'price',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
