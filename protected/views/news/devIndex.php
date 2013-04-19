<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->widget('DevWidget');?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/devReport.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/scrollto/smoothDivScroll.css"  />

<style type="text/css">
	#logoParade
	{
		width: 900px;
		height: 154px;
		position: relative;
		margin-left: 40px;
		
	}

	#logoParade div.scrollableArea a
	{
		display: block;
		float: left;
		padding-left: 10px;
	}
</style>
	
<div class="devForward">
    <p>2012年被业界评为平台征战元年项目团队成员毫不妥协的强调接口——既在产品里面，也在人与人之间。洞
        悉该模式的团队会早早的对付接口，在提交所有的组件代码之前，他们构建了一系列的程序来检验接口。
        他们早早地集成个人代码，频繁地测试。请记住康威定律(Conway's Law):产品反映了制造该产品的
        组织结构。对于接口，这一点尤为正确：项目中易导致复杂的产品接口</p>
</div>


<div class="devSchedule">

    <div class ="di_sched"><p class="rule"><span>会议日程</span></p></div>

    <ul class="schedule">
        <li>
            <span>08:00-09:00</span> <span class="di_detail">签到</span>
        </li>
        <li>
            <span>08:00-09:00</span> <span class="di_detail">开幕词 陈昊值 触控科技ceo</span>
        </li>
        <li>
            <span>08:00-09:00</span> <span class="di_detail">签到就覅啊手机gas结果接奥</span>
        </li>
        <li>
            <span>08:00-09:00</span> <span class="di_detail">发多少gas巴巴水电费违法</span>
        </li>
        <li>
            <span>08:00-09:00</span> <span class="di_detail">打发沙发位方位访问</span>
        </li>
        <li>
            <span>08:00-09:00</span> <span class="di_detail">签法师打发沙发是大幅度的顶顶顶顶顶顶顶顶顶顶到</span>
        </li>
        <li>
            <span>08:00-09:00</span> <span class="di_detail">大幅度发对顶顶顶顶顶顶顶顶顶顶</span>
        </li>
    </ul>

</div>


<style>

</style>
<div class="devLittle">
	<div id="logoParade">
		<img class="devNews" src="<?php echo $this->staticUrl('news/newsList/meeting/dev_news.jpg'); ?>" />
	</div>
    <div class="devNewsWords">
        <ul class="devNewsList">
            <li>
                <!--<a><img src="<?php echo $this->staticUrl('devIndex/dev_lit1.jpg'); ?>" /></a>-->
                <span>刘浩：1手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span>
            </li>
            <li>
                <span>刘浩：2手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span>
            </li>
            <li>
                <span>刘浩：3手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span>
            </li>
            <li>
                <span>刘浩：4手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span>
            </li>
            <li>
                <span>刘浩：5手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span>
            </li>

        </ul>
    </div>

</div>


<div class="corporation">
    <img class="devLogos" src="<?php echo $this->staticUrl('news/dev/dev_corLogo.jpg'); ?>"></img>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scrollto/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scrollto/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scrollto/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#logoParade").smoothDivScroll({ 
			autoScrollingMode: "always", 
			autoScrollingDirection: "endlessLoopRight", 
			autoScrollingStep: 1, 
			autoScrollingInterval: 25 
		});

		// Logo parade event handlers
		$("#logoParade").bind("mouseover", function() {
			$(this).smoothDivScroll("stopAutoScrolling");
		}).bind("mouseout", function() {
			$(this).smoothDivScroll("startAutoScrolling");
		});

	});
</script>