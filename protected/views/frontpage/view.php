<div class="container">
<br />
<br />
<br />
<br />
<?php
$this->breadcrumbs=array(
	'about'=>array('index'),
	$model->id,
);

?>

<div style='width: 800px'>
    <div style ='margin-bottom: 50px;'>
        <h1>Edit Frontpage</h1>

        <p>
            Halaman ini mengatur bagaimana konten di halaman depan ditampilkan.</br>
        </p>
        <p>
            Silahkan mengatur dan melakukan editing pada halaman depan Anda dengan meggunakan link
            berikut: </br>
            Edit: <?php echo CHtml::link('edit Frontpage',array('/frontpage/update')); ?> </br>
        </p>
    </div>

    <div style ='border: 1px solid white; margin-bottom: 50px;'>
        <?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$model,
                'attributes'=>array(
                        //'id',
                        //'name',
                        'foodThumbnail',
						array(
								'name'=>'foodDesc',
								'type'=>'raw',
						),
						'cakesThumbnail',
                        array(
								'name'=>'cakesDesc',
								'type'=>'raw',
						),
						'dessertThumbnail',
						array(
                				'name'=>'dessertDesc',
                				'type'=>'raw',
                		),
                		
                ),
        )); ?>
    </div>
</div>
</div>