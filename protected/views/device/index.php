<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/device.css"  />

<div id="device_box">
	
	<?php $this->widget('DeviceWidget');?>
	
	<img  src="<?php echo $this->staticUrl('device/index/title.jpg');?>"/>
	
	<ul class="d_imglist">
		<li><img src="<?php echo $this->staticUrl('device/index/list_1.jpg');?>"/><br />清晰的屏幕外加种便捷的APP，使得出行更方便。</li>
		<li><img src="<?php echo $this->staticUrl('device/index/list_2.jpg');?>"/><br />强大的配置让工作时更得心应手。</li>
		<li><img src="<?php echo $this->staticUrl('device/index/list_3.jpg');?>"/><br />各种生活小贴士助您生活更愉快。</li>
	</ul>
</div>


