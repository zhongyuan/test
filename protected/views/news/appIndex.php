
<?php $this->widget('AppWidget');?>

<style>
    .app_ibody{
        padding: 0px 70px;
        color: gray;

        /*先设置为灰色*/
    }
    .app_para{
        padding: 20px 0px;
        font-size: 12px;
		line-height: 22px;
    }
    .horizon_line{
        overflow:hidden;
        height: 1px;
        width: 100%;
        background-color: #c2c4c8;
    }
    .vertical_line{
        height: 10px;
        width: 3px;
        background-color: #ff6633;
        /*颜色未定*/
    }
    .app_ileft{
        width: 625px;
        display: inline-block;
		float: left;
		clear: left;
    }
    .app_iprotitle{
        font-size: 24px;
        color: black;
        margin: 0px 20px;
    }
    .top_bottem_space{
        margin: 15px 0px;
    }
    .app_iprocontent{
        font-size: 18px;
        color: black;
        padding: 15px 0px;
    }
    .app_iprocontent span{
        padding: 0px 17px;
    }

    .app_inotice li{
        font-size: 14px;
        color: gray;
        line-height: 28px;
    }
    .app_iright{
        width: 290px;
        display: inline-block;
        vertical-align: top;
        margin-left: 40px;
		margin-top: 20px;
    }


	ul.app_ireward{
		margin-top:20px;
	}
    .app_ireward li{
        margin-bottom: 38px;

    }
    .app_ireward img{
        display: inline-block;

    }
    .app_ireward p{
        display: inline-block;
        vertical-align: top;
        margin-left:
    }
	ul.dev_notice li{
		font-size:12px;
	}
</style>

<div class="app_ibody">
    <p class="app_para">经过多年的努力！终于，中国拥有了自己的OS！新的设计，也在人与人之间。洞
    悉该模式的团队会早早的对付接口，在提交所有的组件代码之前，他们构建了一系列的程序来检验接口。
    他们早早地集成个人代码，频繁地测试。请记住康威定律(Conway's Law):产品反映了制造该产品的
    组织结构。对于接口，这一点尤为正确：项目中易导致复杂的产品接口</p>

    <div class="horizon_line"></div>

    <div class="app_ileft">
        <div class="top_bottem_space">
            <span class="vertical_line">&nbsp;</span><span class="app_iprotitle"><?php echo Yii::t('news','race_flow');?></span>
            <div style="margin-top: 25px;">
                <img src="<?php echo $this->staticUrl('news/app/app_iprocess.jpg');?>" />
                <p class="app_iprocontent">
                    <span style="margin-left:23px;"><?php echo Yii::t('news','race_signup');?></span>
                    <span style="margin-left:25px;"><?php echo Yii::t('news','race_qualify');?></span>
                    <span style="margin-left:15px;"><?php echo Yii::t('news','race_work_upload');?></span>
                    <span style="margin-left:10px;"><?php echo Yii::t('news','race_vote');?></span>
                    <span ><?php echo Yii::t('news','race_pub_result');?></span>
                </p>
            </div>
        </div>

        <div class="horizon_line"></div>

        <div class="app_inotice top_bottem_space">
            <span class="vertical_line">&nbsp;</span><span class="app_iprotitle">参赛须知</span>
            <ul class="dev_notice">
                <li>◆ 任何团体或个人都可以参赛(内部员工除外)，团体和个人皆以提交的作品为单位。</li>
                <li>◆ 参赛者需在大赛官网注册、报名、提交作品，参赛者报名必须提供真实的姓名、联系方式。如因参数者提供的信<br/>息错误，导致主办方无法与参赛者取得联系，按自动弃权处理。</li>
                <li>◆ 报名时间：**年**月**日-**年**月**日，逾期提交无效。</li>
                <li>◆ 参赛作品审核成功后，将提交到大赛官网。最终比赛结果，将综合专家陪审团和公众投票意见决定。</li>
                <li>◆ 比赛结果将在第二届COS开发者大会上公布并颁奖。所有奖金为税前所得。</li>
                <li>◆ 主办方有权对参赛者活动资格进行审核，为核实参赛者的信息，主办方有权要求参赛者提供相关资料以供确认。</li>
                <li>◆ 参赛者必须保证作品的原创性、合法性，若出现剽窃其他个人或者团体所开发应用的情况，将取消参赛资格，所引起的一切法律责任，均由作品开发者自然人或机构团体承担。</li>
                <li>◆ 在本活动期间，因故不能正常进行时，主办方有权决定取消、终止、修改或者暂停活动。</li>
                <li>◆ 活动最终解释权归主办方所有。</li>
            </ul>
        </div>

    </div>

    <div class="app_iright">
        <span class="vertical_line">&nbsp;</span><span class="app_iprotitle">奖项设置</span>
        <ul class="app_ireward">
			<?php foreach($reward_settings as $sk=>$sv):?>
				<?php
					if($sk == 100){//积极参与奖不显示
						continue;
					}
				?>
				<li>
	                <img src="<?php echo $this->staticUrl('news/app/reward.jpg');?>">
	                <p><span><?php echo $sv[0]?> </span><br/> <?php echo $sv[1]?><br/><?php echo $sv[2]?></p>
	            </li>
			<?php endforeach;?>


        </ul>
    </div>


</div>