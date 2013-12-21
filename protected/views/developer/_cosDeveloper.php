
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->widget('SearchWidget');
?>

<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cos_developer.css"  />-->
<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/developer_menu.js"></script>-->

<SCRIPT type="text/javascript">
//		var demoIframe;
//		$(document).ready(function(){
//			$("#boxscroll").niceScroll({
//				touchbehavior:false,
//				cursorcolor:"#dfdfdf",
//				cursoropacitymax:0.7,
//				cursorwidth:4,
//				cursorborder:"1px solid gray",
//				cursorborderradius:"4px",
//				background:"#ccc",
//				autohidemode:"scroll"
//				}).cursor.css({"background-image":"url(img/mac6scroll.png)"});
//			
//			demoIframe = $("#testIframe");
//			demoIframe.bind("load", loadReady);
////			$(".menu ul li").menu();
//			//设置初始化IFRAME信息
//			$("#testIframe").attr("src","<?php echo $first_id?>");
//			
//			//控制节点点击链接操作
////			$(".menu a").click(function(){
////				$("#testIframe").attr("src",this.name);
////            });
//		});

	</SCRIPT>
    
<style>
.content_wrap{
	overflow: hidden;
	width: 980px;
	margin: 10px auto;
	min-height:400px; 
    height:auto !important; 
    /*height:400px;*/ 
}
.content_wrap h3{
	text-align: right;
	margin-bottom: 10px;
}
.content_wrap h3 a{
	color:green;
	border:1px solid green;
	color: #4db385;
	border-radius: 5px;
	padding: 1px;
}
.content_wrap textarea{
	width:800px;
	height: 500px;
}
.content_wrap #sbt{
	margin-top: 20px;
	width:120px;
	height: 40px;
	font-size: 20px;
}

</style>
	
<div class="content_wrap">
	
<!--    <div id="boxscroll" class="devguide_left">
		<div class="zTreeDemoBackground">
			<div id="leftMenu">
				<div class="menu">
				<?php echo $dataHtml;?>
				</div>
			</div>
		</div>	
	</div>		-->
    
    <div class="drop_list">
        <?php $this->widget('DropmenuWidget' ,array('type' => 1));?>
    </div>

				
<!--	<div class="devguide_right" id="htmlContent">
		<IFRAME ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=450px SRC="/gaia_plugin2/def.html"></IFRAME>

	</div>-->
</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nicescroll.min.js"></script>