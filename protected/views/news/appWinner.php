
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/appWinner.css"  />

<?php $this->widget('AppWidget');?>

<div class="app_dbody">
	<h2 class="big_title">获奖前言<img src="/images/news/app/reward_profile.jpg" align="absmiddle"/></h2>
	<div class="sec_label">历时一个多月的全国性2013开发者大赛已经圆满结束了，感谢近千名开发者的踊跃参与。经过仔细测试开发者提交的参赛作品，我们在感受到国人强大的实力与各种天马行空的创意之后，总结并评选出以下获奖作品，祝贺他们！！我们会尽快安排奖金及奖品的发放，请获奖者留意邮件或电话通知。</div>

	<h2 class="big_title">获奖名单<img  src="/images/news/app/reward_list.jpg"/></h2>
	
	
	<?php foreach($workList as $rk=>$rv):?>
		<?php
			if($rk == 100){
				continue;//此处不显示积极参与奖
			}
		?>
		<h3><?php echo $rv['label'];?></h3>
		<ul class="w_list">
			<?php foreach($rv['data'] as $sub_rv):?>
				<li>
					<div class="r_list">
						<img src="/images/news/worksUpload/small/work_little_6.jpg"/>
						获奖作品: <?php echo $sub_rv['work_name'];?>
						<br />作者:<?php echo $sub_rv['team_name'];?>
					</div>
				</li>
			<?php endforeach;?>
		</ul>
	<?php endforeach;?>
	
	
	
	<h3><?php echo $workList[100]['label']?> <span>排名不分先后</span></h3>
	<ul class="win_list">
		<?php foreach($workList[100]['data'] as $wk=>$wv):?>
			<li>获奖者: <?php echo $wv['team_name'];?></li>
		<?php endforeach;?>
	</ul>
	
	
	<p>特别声明</p>
	<ul class="d_items">

		<li>◆ 主办方通过参赛者提供作品时提交的联系方式通知获奖者。</li>
		<li>◆ 现金获奖者自公布之日起90天内应按照所通知的颁奖方式领取奖品，奖品领取方式将另行通知。如困获奖者自身原因导致不能按时领取奖品时，获奖者应及时通知主办方。逾期未能领取奖品且未通知主办方的，即视为自动放弃获奖资格。主办方不承担任何责任并有权自行处理奖品。</li>
		<li>◆ 现金奖金的相关个人所得税由获奖者自行承担。根据有关规定，主办方有义务从奖品中代扣获奖者相关个人所得税。</li>
		<li>◆ 在法律许可的范围内，对于获奖者或任何其他人或财产因接受任何奖品或与奖品有关面遭受的任何损失或损害(包括但不限于间接或后果性的损失) 或所遭受或发生的人身伤害，主办方概不承担任何责任。</li>
		<li>◆ 如获奖者系一个组织(包括但不限于公司 工作室 组合等形式)，则该组织必须确定一名代表成员接受奖励，否则该参赛者将丧失获得奖励的权利。且主办方可自行决定将该奖励授予其他参赛者。主办方一旦向该名代表组织接受奖励的成员颁发奖励，则视为已向该组织颁发了奖励。</li>
		<li>◆ 参赛者应自行负责在其成员之间分配和分发奖品，主办方对此不承担责任。</li>
		<li>◆ 本次大赛将奖品'诺基亚N9手机'全部更换为'诺基亚PureView 808手机'。</li>
		<li>◆ 本次活动的最终解释权归主办方所有。</li>
	</ul>

</div>
