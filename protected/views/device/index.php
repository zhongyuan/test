<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/device.css"  />
<?php $this->widget('DeviceWidget');?>

<img  src="<?php echo $this->staticUrl('device/index/title.jpg');?>"/>
<div id="device_box">
	<ul class="d_imglist global_f">
		<li><img src="<?php echo $this->staticUrl('device/index/list_1.jpg');?>"/><span>清晰的屏幕外加种便捷的APP，使得出行更方便。</span></li>
		<li><img src="<?php echo $this->staticUrl('device/index/list_2.jpg');?>"/><span>强大的配置让工作时更得心应手。</span></li>
		<li><img src="<?php echo $this->staticUrl('device/index/list_3.jpg');?>"/><span>各种生活小贴士助您生活更愉快。</span></li>
	</ul>
</div>



