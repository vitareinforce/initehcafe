<?php
$this->breadcrumbs=array(
	'Uploads'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('uploads-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<div class="container">
<br />
<br />
<br />
<br />

<h1>Manage Uploads</h1>

<p>
    Silahkan tambah gambar yang akan diupload. </br>
</p>
<p>
    Tambah Gambar: <?php echo CHtml::link('Tambah Gambar',array('/uploads/create')); ?> </br>
</p>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'uploads-grid',
'dataProvider'=>$model->search(),
'columns'=>array(
		'id',
		'image',
		'desc',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
</div>
