

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;



$criteria = new CDbCriteria;
$criteria->select = 'foodThumbnail, foodDesc, cakesThumbnail, cakesDesc, dessertThumbnail, dessertDesc'; 
$criteria->condition = 'id = 1';

$array = Frontpage::model()->find($criteria);
foreach($array as $key => $value){
	if ($key == 'foodThumbnail') {
		$foodImg = $value;
	} else if ($key == 'foodDesc') {
		$foodDesc = $value;
	} else if ($key == 'cakesThumbnail') {
		$cakesImg = $value;
	} else if ($key == 'cakesDesc') {
		$cakesDesc = $value;
	} else if ($key == 'dessertThumbnail') {
		$dessertImg = $value;
	} else if ($key == 'dessertDesc') {
		$dessertDesc = $value;
	}
}

?>

<br />
<br />
<br />
<br />
<li class="span3">
<div class="thumbnail">
<img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="<?php echo Yii::app()->request->baseurl ."/images/galery/".$foodImg; ?>">
<div class="caption">
<h3>Food</h3>
<?php echo $foodDesc; ?>
<p><a href="<?php echo Yii::app()->homeurl. "/menu/food";?>" class="btn btn-primary">&raquo</a></p>
</div>
</div>
</li>
<li class="span3">
<div class="thumbnail">
<img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="<?php echo Yii::app()->request->baseurl ."/images/galery/".$cakesImg; ?>">
<div class="caption">
<h3>Cakes</h3>
<?php echo $cakesDesc; ?>
<p><a href="<?php echo Yii::app()->homeurl. "/menu/cakes";?>" class="btn btn-primary">&raquo</a></p>
</div>
</div>
</li>
<li class="span3">
<div class="thumbnail">
<img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="<?php echo Yii::app()->request->baseurl ."/images/galery/".$dessertImg; ?>">
<div class="caption">
<h3>Dessert</h3>
<?php echo $dessertDesc; ?>
<p><a href="<?php echo Yii::app()->homeurl. "/menu/dessert";?>" class="btn btn-primary">&raquo</a></p>
</div>
</div>
</li>