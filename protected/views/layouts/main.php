<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <meta name="keywords" content="COS,China-COS,China OS,上海联彤,联彤,自主操作系统,中国自主操作系统,移动终端操作系统,智能电视机顶盒,COS开发者,COS手机,COS平板电脑">
    <meta name="description" content="COS全称China-OS，是中国自主操作系统，COS官网提供COS产品特性描述，COS设备介绍，市场信息及商务合作等信息咨询。"/>
    <link rel="shortcut icon" href="<?php echo $this->staticUrl('favicon.ico');?>" type="image/x-icon" />
    <link rel="icon" type="image/gif" href="<?php echo $this->staticUrl('favicon.ico');?>" type="image/x-icon" />
	<!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl('header_footer.css', 'css');?>"  />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    
    <script type="text/javascript" src="<?php echo $this->staticUrl('jQuery_v183.js', 'js');?>"></script>  
    
    <!--<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
    <script type="text/javascript">
//    if (typeof jQuery == 'undefined')
//    {
//      document.write(unescape("%3Cscript src='<?php echo Yii::app()->request->baseUrl;?>/js/jQuery_v183.js' type='text/javascript'%3E%3C/script%3E"));
//    }
    </script> 
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

</body>
</html>
