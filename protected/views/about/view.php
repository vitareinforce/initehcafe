<div class="container">
<br />
<br />
<br />
<br />
<?php
$this->breadcrumbs=array(
	'about'=>array('index'),
	$model->title,
);

?>

<div style='width: 800px'>
    <div style ='margin-bottom: 50px;'>
        <h1>Edit About</h1>

        <p>
            Halaman ini mengatur bagaimana konten di halaman About Us ditampilkan. Terdapat template sebagai berikut :</br>
            1. Title. Template ini digunakan untuk mengubah Judul besar yang ada di halaman About Us. </br>
            2. Desc. Template ini dipergunakan untuk mengubah resume singkat yang ada di di halaman About Us. </br> 
            3. Maps. Template ini dipergunakan untuk mengubah peta lokasi (Google Maps). </br>
        </p>
        <p>
            Silahkan mengatur dan melakukan editing pada About Us Anda dengan meggunakan link
            berikut: </br>
            Edit: <?php echo CHtml::link('edit About Us',array('/about/update')); ?> </br>
        </p>
    </div>

    <div style ='border: 1px solid white; margin-bottom: 50px;'>
        <?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$model,
                'attributes'=>array(
                        //'id',
                        //'name',
                        'title',
						array(
								'name'=>'desc',
								'type'=>'raw',
						),
                        array(
                            'name'=>'maps',
                            'type'=>'raw',
                        ),
                ),
        )); ?>
    </div>
</div>
</div>