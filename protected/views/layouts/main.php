<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/header_footer.css"  />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->

        <!-- Jquery -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jQuery_v183.js"></script>

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

	<div id="search_list">
	<?php echo $content; ?>
	</div>
	<script>
    $(function(){
        $('.yiiPager a').click(function(){
			var url = $(this).attr('href');
            $.ajax({
                url:url,
                success:function(html){
                    $('#search_list').html(html);
					return false;
                }
            });
            return false;
        });
    });
	</script>
       <!-- =====footer===== -->
        <div id="footer">
                <?php $this->widget('FooterWidget');?>
        </div>


</div><!-- page -->

</body>
</html>
