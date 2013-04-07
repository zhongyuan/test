<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/devDetail.css"  />
<div class="app_dbody">
	<div class="circles_detail">
		<div class="content_box">
			<div class="content">
				2013年10月1日至11月1日期间，广大开发者，业余达人或公司都可以登录大赛官方网站进行报名哦！！
			</div>
		</div>
	</div>
	<ul class="circles">
		<li class="circle_mark left_margin" id="one">1</li>
		<li class="circle left_margin" id="two">2</li>
		<li class="circle left_margin" id="three">3</li>
		<li class="circle left_margin" id="four">4</li>
		<li class="circle left_margin" id="five">5</li>
	</ul>
	<ul class="circles_text">
		<li class="one">报名</li>
		<li class="two">资格审核</li>
		<li class="three">作品提交</li>
		<li class="four">公众投票</li>
		<li class="five">比赛结果公布</li>
	</ul>
	
	<ul class="d_items">
		
		<li>◆ 任何团体或者个人均可参赛(内部员工除外)，团体和个人皆以提交的作品为单位。</li>
		<li>◆ 参赛者需在大赛官网注册、报名、提交作品，参赛者报名必须提供真实的姓名、联系方式。如因参赛者提供的信息错误，导致主办方无法与参赛者取得联系，按自动弃权处理。</li>
		<li>◆ 报名时间：xx年xx月xx日-xx年xx月xx日，逾期提交无效。</li>
		<li>◆ 参赛作品审核成功后，将发布在大赛官网。最终比赛结果，将综合专家评审团和公众投票意见决定。</li>
		<li>◆ 比赛结果将在第二届COS开发者大会上公布并颁奖。所有资金为税前所得。</li>
		<li>◆ 主办方有权对参赛者活动资格进行审核，为核实参赛者的信息，主办方有权要求参赛者提供相关资料以供确认。</li>
		<li>◆ 参赛者必须保证作品的原创性、合法性，若出现剽窃其他个人或团体所开发应用的情况，将取消参赛资格，所引起的一切法律责任，均由作品开发者自然人或机构团体承担。</li>
		<li>◆ 在本活动期间，因故不能正常进行时，主办方有权决定取消、终止、修改或暂停活动。</li>
		<li>◆ 活动最终解释权归主办方所有。</li>
	</ul>
</div>

<script language="javascript">
	
	$(document).ready(function(){
		$(".circles li").bind("mouseover",function(){
			var obj_id=this.id;
			var circle_id=parseInt($("#"+obj_id).html());
			var bg_img="url(/images/devDetail/flow_"+circle_id+".jpg)";
			var ids=["one","two","three","four","five"];
			var contents=["2013年10月1日至11月1日期间，广大开发者，业余达人或公司都可以登录大赛官方网站进行报名哦！！"
			,"2013年11月2日至11月20日期间，由专家组成的大赛官方评委团将会对参赛选手进行身份资料等的审核，以确保比赛的优质性。",
			"所有参赛者必须在2013年10月1日到11月20日23:59分之前，登录大赛的官方网站提交参赛作品，审核通过即可在网站上呈现。提交的内容有<ul class='work_items'><li>◆ 作品介绍投影片</li><li>◆ 作品程序及源代码</li><li>◆ 开发文档</li><li>◆ 使用手册</li><li>◆ 作品演示视频介绍投影片</li></ul>",
"2013年11月20日至12月1日期间，审核通过的作品将会在作品展示页面进行展示，广大网友可以通过在线点击评分的方法进行评分。",
"我们将会在2013年12月30日公布比赛的结果，请参赛者及时关注官方网站的最新动态。"];
			for(var i=0;i<ids.length;i++){
				if(obj_id == ids[i]){
					$("#"+obj_id).removeClass("circle circle_mark").addClass("circle_mark");
					
					$(".circles_detail").css("background",bg_img);
					//alert(contents[i]);
					$(".circles_detail .content_box .content").html(contents[i]);
				}else{
					$("#"+ids[i]).removeClass("circle circle_mark").addClass("circle");
				}
			}
			
			
		});
	});
</script>