<div class="container">
<br />
<br />
<br />
<br />
<?php
$this->breadcrumbs=array(
	'Webconfig'=>array('index'),
	$model->Title,
);

?>

<div style='width: 800px'>
    <div style ='margin-bottom: 50px;'>
        <h1>Website Configuration</h1>

        <p>
            Halaman ini mengatur bagaimana konfigurasi website. Terdapat template sebagai berikut :</br>
            1. Title. Template ini digunakan untuk mengubah Judul Website. </br>
            2. Facebook. Template ini dipergunakan untuk mengubah alamat facebook pada footer. </br> 
            3. Twitter. Template ini dipergunakan untuk mengubah alamat twitter pada footer. </br>
            4. Youtube. Template ini dipergunakan untuk mengubah alamat youtube pada footer. </br>
            5. adminMail. Template ini dipergunakan untuk mengubah alamat email. </br>
            6. Phone. Template ini dipergunakan untuk mengubah nomor telepon. </br>
            </p>
        <p>
            Silahkan mengatur dan melakukan editing pada Website Configuration Anda dengan meggunakan link
            berikut: </br>
            Edit: <?php echo CHtml::link('Website Configuration',array('/webconfig/update')); ?> </br>
        </p>
    </div>

    <div style ='border: 1px solid white; margin-bottom: 50px;'>
        <?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$model,
                'attributes'=>array(
                        'Title',
						'Facebook',
                		'Twitter',
                		'Youtube',
						'adminMail',
						'Phone',
                ),
        )); ?>
    </div>
</div>
</div>