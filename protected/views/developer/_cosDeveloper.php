
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->widget('SearchWidget');
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cos_developer.css"  />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/developer_menu.js"></script>

<SCRIPT type="text/javascript">
		var demoIframe;
		$(document).ready(function(){
		
		
			$("#boxscroll").niceScroll({
				touchbehavior:false,
				cursorcolor:"#dfdfdf",
				cursoropacitymax:0.7,
				cursorwidth:4,
				cursorborder:"1px solid gray",
				cursorborderradius:"4px",
				background:"#ccc",
				autohidemode:"scroll"
				}).cursor.css({"background-image":"url(img/mac6scroll.png)"});
			
			demoIframe = $("#testIframe");
			demoIframe.bind("load", loadReady);
			$(".menu ul li").menu();
			
			//设置初始化IFRAME信息
			$("#testIframe").attr("src","<?php echo $first_id?>");
			
			//控制节点点击链接操作
			$(".menu a").click(function(){
				$("#testIframe").attr("src",this.name);
				$(".menu a").removeClass("active");
				$("#"+this.id).removeClass("inactive").addClass("active");
				
				$("#boxscroll").niceScroll().resize();
			});
		});

		function loadReady() {
			var bodyH = demoIframe.contents().find("body").get(0).scrollHeight,
			htmlH = demoIframe.contents().find("html").get(0).scrollHeight,
			maxH = Math.max(bodyH, htmlH), minH = Math.min(bodyH, htmlH),
			h = demoIframe.height() >= maxH ? minH:maxH ;
			if (h < 530) h = 530;
			demoIframe.height(h);
		}
	</SCRIPT>
	
<div class="content_wrap">
	
	<div id="boxscroll">
		<div class="zTreeDemoBackground left">
			<div id="leftMenu">
				<div class="menu">
				<?php echo $dataHtml;?>
				</div>
			</div>
		</div>	
	</div>				
				
	<div class="right" id="htmlContent">
		<IFRAME ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=450px SRC="/gaia_plugin2/def.html"></IFRAME>
	</div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nicescroll.min.js"></script>