<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/header_footer.css"  />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

        <!-- =====header===== -->
        <div id ="header" style="width: 100%;">
                <?php $this->widget('HeaderWidget');?>
        </div>

        <!-- =====body===== -->
       <div style="clear:both"></div> <!--  有必要的-->

	<?php echo $content; ?>

       <!-- =====footer===== -->
        <div id="footer">
                <?php $this->widget('FooterWidget');?>
        </div>


</div><!-- page -->

</body>
</html>
