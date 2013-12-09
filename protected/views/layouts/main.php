<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/gif" href="/images/favicon.ico" type="image/x-icon" />
	<!-- blueprint CSS framework -->
    
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/header_footer.css"  />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!--<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jQuery_v183.js"></script>-->  
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
</head>
    
<body>
<div class="container" id="page">

        <!-- =====header start===== -->
        <div id ="header" >
                <?php $this->widget('HeaderWidget');?>
        </div>
        <!-- =====header end===== -->

        
        
        <!-- =====content start===== -->
        <div style="clear:both"></div> <!--  有必要的-->
        <?php echo $content; ?>
        <!-- =====content end===== -->
        
        
        
       <!-- =====footer===== -->
        <div style="clear:both"></div> <!--  有必要的-->
        <div id="footer">
            <!--<div>ddddd</div>-->
                <?php $this->widget('FooterWidget');?>
        </div>


</div>

        <!-- Jquery -->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jQuery_v183.js"></script>-->   
       
</body>
</html>
