<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/device.css"  />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jcarousel/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jcarousel/skins/tango/skin.css"  />

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel();
});
</script>
<div id="device_box">
	
	<ul id="mycarousel" class="jcarousel-skin-tango">
	    <li><img src="<?php echo $this->staticUrl('device/nav/nav_1.jpg');?>"/></li>
		<li><img src="<?php echo $this->staticUrl('device/nav/nav_2.jpg');?>"/></li>
		<li><img src="<?php echo $this->staticUrl('device/nav/nav_3.jpg');?>"/></li>
		<li><img src="<?php echo $this->staticUrl('device/nav/nav_4.jpg');?>"/></li>
		<li><img src="<?php echo $this->staticUrl('device/nav/nav_5.jpg');?>"/></li>
		
		<li><img src="<?php echo $this->staticUrl('device/nav/nav_1.jpg');?>"/></li>
		<li><img src="<?php echo $this->staticUrl('device/nav/nav_2.jpg');?>"/></li>
		<li><img src="<?php echo $this->staticUrl('device/nav/nav_3.jpg');?>"/></li>
		<li><img src="<?php echo $this->staticUrl('device/nav/nav_4.jpg');?>"/></li>
		<li><img src="<?php echo $this->staticUrl('device/nav/nav_5.jpg');?>"/></li>
		
	</ul>
	
	<img  src="<?php echo $this->staticUrl('device/index/title.jpg');?>"/>
	
	<ul class="d_imglist">
		<li><img src="<?php echo $this->staticUrl('device/index/list_1.jpg');?>"/><br />清晰的屏幕外加种便捷的APP，使得出行更方便。</li>
		<li><img src="<?php echo $this->staticUrl('device/index/list_2.jpg');?>"/><br />强大的配置让工作时更得心应手。</li>
		<li><img src="<?php echo $this->staticUrl('device/index/list_3.jpg');?>"/><br />各种生活小贴士助您生活更愉快。</li>
	</ul>
</div>


