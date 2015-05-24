<div class="container">
<br />
<br />
<br />
<br />
<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('users-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Users</h1>

<p>
    Silahkan kelola user yang ada pada perusahaan Anda. </br>
</p>
<p>
    Tambah User: <?php echo CHtml::link('Tambah User',array('/users/create')); ?> </br>
</p>
<?php 
$this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'users-grid',
'dataProvider'=>$model->search(),
'columns'=>array(
                    array(
						'name' => 'id',
						'header' => 'User ID',
					),
                    array(
                        'name' => 'username',
                        'header' => 'Username',
                    ),
					array(
            			'name' => 'roles_id',
            			'header' => 'Role Level',
            			'type' => 'raw',
            			'value' => function($data,$row) {if($data->roles_id == 1) {	return "Administrator";	} else if($data->roles_id == 0) {	return "Regular User";	}},
            		),
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),
),
)); ?>
</div>
