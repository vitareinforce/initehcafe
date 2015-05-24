<?php /* @var $this Controller */ ?>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <!--  
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
    -->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<?php 
	//$logo = Yii::app()->request->baseurl.'/images/initehlogo.jpg';
	$facebookLogo = Yii::app()->request->baseurl.'/images/facebook.png';
	$twitterLogo = Yii::app()->request->baseurl.'/images/twitter.png';
	$youtubeLogo = Yii::app()->request->baseurl.'/images/youtube.png';
	$logocafe = '<img src="'.$logo.'" style="height: auto; max-height: 20px;" >';	

	$criteria = new CDbCriteria;
	$criteria->select = 'Title, Facebook, Twitter, Youtube, adminMail, Phone';
	$criteria->condition = 'id = 1';
	
	$array = Webconfig::model()->find($criteria);
	foreach($array as $key => $value){
		if ($key == 'Title') {
			$title = $value;
		} else if ($key == 'Facebook') {
			$fb = $value;
		} else if ($key == 'Twitter') {
			$tweet = $value;
		} else if ($key == 'Youtube') {
			$ytube = $value;
		} else if ($key == 'adminMail') {
			$adminMail = $value;
		} else if ($key == 'Phone') {
			$phone = $value;
		}
	}
	
	
	$this->widget(
		'bootstrap.widgets.TbNavbar',
		array(
				'type'=> 'inverse',
				'brand' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.Yii::app()->name,
				'collapse' => true,
				'fixed' => 'top',
				'items' => array(
						array(
								'class' => 'bootstrap.widgets.TbMenu',
								'items' => array(
										array('label'=>'Home', 'url'=>array('/site/index')),
										array('label' => 'Menu',
						                      'items' => array(
						                            array('label' => 'Food', 'url' => array('/menu/food')),
						                            array('label' => 'Cakes', 'url' => array('/menu/cakes')),
						                            array('label' => 'Dessert', 'url' => array('/menu/dessert')),
											  )
                    					),
										array('label'=>'About Us', 'url'=>array('/about/index')),
										array('label'=>'Contact Us', 'url'=>array('/site/contact')),
										array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
										array('label'=>'Settings', 'url'=>array('/site/settings'), 'visible'=>!Yii::app()->user->isGuest),
										array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
								)
						)
				)
		)
	);
	
	/*
	echo '<div class="container">';
	if(isset($this->breadcrumbs)) {	
		$this->widget(
			'bootstrap.widgets.TbBreadcrumbs',
			array(
					'links'=>$this->breadcrumbs,
			)
		);
	}
	echo '</div>';
	*/
?>
<div class="container">
<?php echo $content; ?>
<br />
</div>
<br />
<br />
<br />
 <div class="navbar navbar-inner navbar-fixed-bottom">
  <div class="container">
    <p class="muted credit">
    <div style="float: left;">&copy; <font size="2"><?php echo date('Y'); ?> &nbsp; <?php echo $title ; ?> &nbsp;</font></div>
    <div style="float: right;"><a href="<?php echo $fb; ?>"><img alt="Youtube" src="<?php echo $facebookLogo; ?>" style="height: auto; max-height: 15px;" /> &nbsp;</a></div>
    <div style="float: right;"><a href="<?php echo $tweet; ?>"><img alt="Youtube" src="<?php echo $twitterLogo; ?>" style="height: auto; max-height: 15px;" /> &nbsp;</a></div>
    <div style="float: right;"><a href="<?php echo $ytube; ?>"><img alt="Youtube" src="<?php echo $youtubeLogo; ?>" style="height: auto; max-height: 15px;" /> &nbsp;</a></div>
    </p>
  </div>
 </div>

</body>
</html>
