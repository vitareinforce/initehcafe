<div class="container">
<br />
<br />
<br />
<br />


<?php 
$this->breadcrumbs=array(
	'Settings',
);
?>
<div class="container-custom">
<div class="row">
		<div class="span4">
          <h2>Manage Menu Makananan</h2>
          <p align="justify">Silahkan gunakan menu ini untuk menamba menu makananan. </p>
          <p><a class="btn" href="<?php echo Yii::app()->homeUrl; ?>/menu/admin">Manage Menu &raquo;</a></p>
        </div>
        <div class="span2"></div>
        <div class="span4">
          <h2>Manage About Page</h2>
          <p align="justify">Silahkan gunakan menu ini untuk mengatur isi yang ada pada About Page.</p>
          <p><a class="btn" href="<?php echo Yii::app()->homeUrl; ?>/about/view">Manage About Page &raquo;</a></p>
       </div>
</div>
<div class="row">
        <div class="span4">
          <h2>Manage Gambar Upload</h2>
          <p align="justify">Silahkan gunakan menu ini untuk mengatur gambar upload yang ada. </p>
          <p><a class="btn" href="<?php echo Yii::app()->homeUrl; ?>/uploads/admin">Manage Gambar Upload &raquo;</a></p>
        </div>
        <div class="span2"></div>
        <div class="span4">
          <h2>Edit Frontpage</h2>
          <p align="justify">Silahkan gunakan menu ini untuk mengatur halaman depan.</p>
          <p><a class="btn" href="<?php echo Yii::app()->homeUrl; ?>/frontpage/view">Edit Frontpage &raquo;</a></p>
        </div>
</div>
<div class="row">
        <?php if(Yii::app()->user->checkAccess('1')) { ?>
		<div class="span4">
          <h2>Website Setting</h2>
          <p align="justify">Silahkan gunakan menu ini untuk mengatur setting pada web.</p>
          <p><a class="btn" href="<?php echo Yii::app()->homeUrl; ?>/webconfig/view">Website Setting &raquo;</a></p>
        </div>
		<div class="span2"></div>
        <div class="span4">
          <h2>Manage User</h2>
          <p align="justify">Silahkan gunakan menu ini untuk mengatur user yang ada.</p>
          <p><a class="btn" href="<?php echo Yii::app()->homeUrl; ?>/users/admin">Manage User &raquo;</a></p>
       </div>
       <?php } ?>
</div>
</div>

</div>