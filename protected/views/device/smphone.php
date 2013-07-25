<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/device.css"  />
<?php $this->widget('DeviceWidget');?>
<div id="device_box" class="phone_box">

	
	<div class="dev_center">
		<ul class="d_phonelist">
			<li>
				<div class="img_left"><img  src="<?php echo $this->staticUrl('device/phone/phone_1.jpg');?>" width="200" align="middle"/></div>
				<div class="phone_one">
					<h1><span class="green">HTC <font color="black">One</font></span></h1>
					<div class="buy_text">
						<p>新HTC One将双前置立体扬声器和功能强大的扩音器完美<br />搭配，让您与身边的所有人一起感受震撼的音效。音乐、视<br />频、游戏，大声分享您的最爱。</p>
						<p><input type="button" name="buy_btn" value="购买" class="buy_btn"></p>
					</div>
				</div>
			</li>
			<li class="stick_bottom">
				<div class="img_right">
					<div class="phone_two">
						<h1 class="orange">HTC BlinkFeed <sup>TM</sup>。您的超炫<br />主屏幕</h1>
						<p>借助BlinkFeed<sup>TM</sup>，只需挑选出您希望始终保持最新的社交网络、<br />新闻和资讯，它们便可实时更新到您的主屏幕。您的世界，您<br />作主。</p>
					</div>
					
				</div>
				<img  src="<?php echo $this->staticUrl('device/phone/phone_2.jpg');?>"/>
			</li>
			<li class="above_bottom">
				<div class="img_left"><img src="<?php echo $this->staticUrl('device/phone/phone_3.jpg');?>" width="400"/></div>
				<div class="phone_three">
					<h1 class="blue">HTC BoomSound<sup>TM</sup>更清<br />晰、更丰富、更响亮</h1>
					<p>如果是普通的智能手机，与朋友分享音乐或视频，效果非常<br />令人沮丧。即便是最激昂的乐曲，微型扬声器也会让它变得沉<br />闷乏味。但全新HTC One的BoomSound<sup>TM</sup>改变了一切。双<br />前置立体扬声器　外加内置扩音器，可提供更响亮、更清晰、<br />更丰富的音效。</p>
				</div>
			</li>
			<li class="stick_bottom">
				<div class="img_right">
					<div class="phone_four">
						<h1 class="green">HTC 智能手机　更睿智设计</h1>
						<p>用更创新的方式减少日常磨损？没问题！新HTC One 采用
						<br />infinity 玻璃显示屏，能够有效消除眩光，并且强力抵抗刮擦。
						<br />无论是现在，还是将来，令人赞叹的外观将会始终光亮如新。</p>	
					</div>
				</div>
				<img src="<?php echo $this->staticUrl('device/phone/phone_4.jpg');?>" class="phone_four_img"/>
			</li>
		</ul>
	</div>
</div>