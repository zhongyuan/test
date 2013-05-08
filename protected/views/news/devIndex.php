<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->widget('DevWidget');?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/devReport.css"  />

<div class="devForward global_f font_7">
    <p>2012年被业界评为平台征战元年项目团队成员毫不妥协的强调接口——既在产品里面，也在人与人之间。洞
        悉该模式的团队会早早的对付接口，在提交所有的组件代码之前，他们构建了一系列的程序来检验接口。
        他们早早地集成个人代码，频繁地测试。请记住康威定律(Conway's Law):产品反映了制造该产品的
        组织结构。对于接口，这一点尤为正确：项目中易导致复杂的产品接口</p>
</div>


<div class="devSchedule global_f">

    <div class ="di_sched"><p class="rule"><span><?php echo Yii::t('news','meetings_schedule');?></span></p></div>

    <ul class="schedule global_f">
        <li>
            <span>08:00-09:00</span> <span class="di_detail">签到</span>
        </li>
        <li>
            <span>09:00-09:30</span> <span class="di_detail">开幕词 陈昊值 触控科技ceo</span>
        </li>
        <li>
            <span>09:30-10:00</span> <span class="di_detail"> << Native HTML5和Hybrid开发技术与生态圈 >> 王哲　Cocos2D-X核心开发者</span>
        </li>
        <li>
            <span>10:00-10:30</span> <span class="di_detail"><<事半功倍的移动游戏开发工具>>　刘冠群　触控科技COO</span>
        </li>
        <li>
            <span>10:30-11:00</span> <span class="di_detail"><<谷得"世界OL"的成功要素>> 麦涛　谷得网络董事&副总经理</span>
        </li>
        <li>
            <span>11:00-11:30</span> <span class="di_detail"><<本土游戏的突围>>　杨锦　神奇时代副总裁</span>
        </li>
        <li>
            <span>11:30-12:00</span> <span class="di_detail"><<手机网游设计　开发与运营要点及与端游产品的类比>> 张沁　空中网iGame总经理　策划总监</span>
        </li>
    </ul>

</div>



<div class="devNews global_f">
    <ul class="devNewsList">
        <li>
            <a class="imgNews back_pos1" href="<?php echo $this->createUrl('news/devDetail',array('news_id'=>$id)); ?>">
            <span class="imgNews_word">刘浩：1手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span></a>
        </li>
        <li>
            <a class="imgNews back_pos2" href="<?php echo $this->createUrl('news/devDetail',array('news_id'=>$id)); ?>">
            <span class="imgNews_word">刘浩：1手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span></a>
        </li>
        <li>
            <a class="imgNews back_pos3" href="<?php echo $this->createUrl('news/devDetail',array('news_id'=>$id)); ?>">
            <span class="imgNews_word">刘浩：1手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span></a>
        </li>
        <li>
            <a class="imgNews back_pos4" href="<?php echo $this->createUrl('news/devDetail',array('news_id'=>$id)); ?>">
            <span class="imgNews_word">刘浩：1手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span></a>
        </li>
        <li>
            <a class="imgNews back_pos5" href="<?php echo $this->createUrl('news/devDetail',array('news_id'=>$id)); ?>">
            <span class="imgNews_word">刘浩：1手机游戏基地三大举措渠道、能力和"游戏梦工厂"</span></a>
        </li>

    </ul>
</div>



<div class="corporation">
    <img src="<?php echo $this->staticUrl('news/dev/dev_corLogo.jpg'); ?>"></img>
</div>
