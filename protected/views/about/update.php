<br />
<br />
<br />
<br />
<?php
$this->breadcrumbs=array(
	'Abouts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

	?>

	<h1>Update About <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>