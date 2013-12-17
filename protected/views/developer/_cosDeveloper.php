
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->widget('SearchWidget');
?>

<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cos_developer.css"  />-->
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
//				$(".menu a").removeClass("green-color");
//				$("#"+this.id).addClass("green-color");
//				$("#boxscroll").niceScroll().resize();
			});
		});

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

/*.content_wrap .left{
	min-height:390px; 
    height:auto !important; 
    height:390px;
	display: inline-block;
	width: 28%;
	
}
.content_wrap .right{
	padding-left: 10px;
	overflow: hidden;
	display: inline-block;
	width: 70%;
}*/
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
.ztree li span.button.add {margin-left:2px; margin-right: -1px; background-position:-144px 0; vertical-align:top; *vertical-align:middle}
/*============浏览模式下的左侧菜单样式==============*/
#leftMenu ul, #leftMenu li{ margin: 0; padding: 0; }
#leftMenu{font-family:georgia, verdana, tahoma, arial, sans-serif; font-size: 0.625em/1.5em; background:#f2f2f2; }
#leftMenu a {color:#1c769a; text-decoration:none; font-size:1.1em;}
#leftMenu a:hover {text-decoration:underline;}

#leftMenu {
/*	width:251px;
	padding:9px;*/
	/*border:solid 1px #fff;*/
	/*border-radius: 10px;*/
	background:#ffffff;
	font-size:11px;
	margin:0 auto;
	overflow-x: hidden;
	overflow-y: auto;
}
#leftMenu h1 {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px; 
	color:#535353;
}
#leftMenu img {
	padding:5px;
	background:#f7f7f7;
	border:solid 1px #464646;
	margin:2px
}

#leftMenu .menu ul  li {
display:block;
/*width:251px;*/
padding-top:2px;
margin-bottom:5px;
/*background: url(/images/developer/zakladka.png) top left no-repeat;*/
background-color: #F2F3F3;
border-radius: 7px;
list-style:none;
overflow:visible;
}
#leftMenu .menu ul  li ul li {
display:block;
/*width:251px;*/
/*padding-top:2px;
margin-bottom:5px;*/
/*background: url(/images/developer/zakladka.png) top left no-repeat;*/
background-color: #ffffff;

list-style:none;
overflow:visible;
}
#leftMenu .menu ul li a {
display:block;
height:34px; 
/*width:223px;*/
margin-top:0px;
padding-top:10px;
padding-left:15px;
font-size:14px;
color:#82846f;
outline:none;
}
#leftMenu .menu ul li .active {
	/*background:url(/images/developer/on.png) top right no-repeat;*/
	color: green;
}

#leftMenu .menu ul li .inactive {
	/*background:url(/images/developer/off.png) top right no-repeat;*/
}
#leftMenu .menu ul li .green-color{
    color: green;
}

#leftMenu .menu ul li ul {
	display:none; 
	/*margin-top:-4px;*/
	/*margin-bottom:10px;*/   
}
#leftMenu .menu ul li ul li ul {
	/*margin-bottom:2px;*/
}
#leftMenu .menu ul li ul li {
	display:block;
	/*background:none;*/
	font-size:12px;
	list-style:circle;
	color:#8f9d4c;
	margin-bottom:0px;
	margin-top:0px;
	padding-top:0px;
	padding-bottom:0px;
	padding-left:16px;
	/*margin-left:15px;*/
}
#leftMenu .menu ul li ul li a {
	background:none;
	font-size:12px;
	height:15px;
	color:#8f9d4c;
	padding-left:0px; 
}

    .devguide_left{
        display: inline-block;
        width: 25%;
    }
    .devguide_right{
        display: inline-block;
        width: 74%;
    }
#leftMenu .menu ul li .up_icon{
    background:url(/images/developer/on.png) top right no-repeat;
}
#leftMenu .menu ul li .down_icon {
	background:url(/images/developer/off.png) top right no-repeat;
}
</style>
	
<div class="content_wrap">
	
    <div id="boxscroll" class="devguide_left">
		<div class="zTreeDemoBackground">
			<div id="leftMenu">
				<div class="menu">
				<?php echo $dataHtml;?>
				</div>
			</div>
		</div>	
	</div>				
				
	<div class="devguide_right" id="htmlContent">
		<IFRAME ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=450px SRC="/gaia_plugin2/def.html"></IFRAME>
	</div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nicescroll.min.js"></script>