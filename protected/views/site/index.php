<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<!--<span style="clear:both"></span>-->

<style>
    .back{
        position: relative;
        height: 250px;
        width: 100%;
    }
    .back img{
        width: 100%;
        position: absolute;
        z-index: -1;
    }
    .back span{
        display: inline-block;
        width: 220px;
        height: 50px;
        position: relative;
        top: 140px;
        font-size: 14px;
    }
</style>

<div>
    <img style="width: 100%;" src="<?php echo $this->staticUrl('index/cos.jpg'); ?>"/>

    <p style="text-align: center;font-size: 30px">多平台 More Platform</p>
    <div class="back">
        <img  src="<?php echo $this->staticUrl('index/plat.jpg'); ?>"/>
        <span style="left: 185px;">宏达国际电子股份有限公司是一和台湾著名的威盛电子是兄弟</span>
        <span style="left: 225px;">宏达国际电子股份有限公司是一和台湾著名的威盛电子是兄弟</span>
        <span style="left: 260px;">宏达国际电子股份有限公司是一和台湾著名的威盛电子是兄弟</span>

    </div>

    <div>
        <img style="" src="<?php echo $this->staticUrl('index/phone.jpg'); ?>"/>
    </div>


    <div style="width: 100%;height:259px; background: url('<?php echo $this->staticUrl('index/intelli.jpg'); ?>') no-repeat center center ;  ">
        <div>
            <div style='padding: 20px 390px;'><p style='font-size: 22px;text-align: center;'>智能模式</p>
                <p style="font-size: 16px;text-align: center;">Intelligent Model</p></div>

            <div style='width: 150px;float: left;margin-top: 125px;margin-left: 115px;'><p style='font-size: 18px; text-align: center;'>电视</p>
                <p style="font-size: 12px;padding: 0 9px;">电视不是一个好东西，哈哈哈哈哈哈哈，好开心呜呜呜呜呜呜呜呜哈哈哈哈哈</p></div>

            <div style='width: 150px;float: left;margin-top: 165px;margin-left: 60px;'><p style='font-size: 18px;text-align: center;'>笔记本/台式电脑</p>
                <p style="font-size: 12px;padding: 0 9px;">电视不是一个好东西，哈哈哈哈哈哈哈，好开心呜呜呜呜呜呜呜呜哈哈哈哈哈</p></div>

            <div style='width: 150px;float: left;margin-top: 125px;margin-left: 180px;'><p style='font-size: 18px;text-align: center;'>手机</p>
                <p style="font-size: 12px;padding: 0 9px;">电视不是一个好东西，哈哈哈哈哈哈哈，好开心呜呜呜呜呜呜呜呜哈哈哈哈哈</p></div>

            <div style='width: 150px;float: left;margin-top: 165px;margin-left: 30px;'><p style='font-size: 18px;text-align: center;'>平板电脑</p>
                <p style="font-size: 12px;padding: 0 9px;">电视不是一个好东西，哈哈哈哈哈哈哈，好开心呜呜呜呜呜呜呜呜哈哈哈哈哈</p></div>

        </div>

    </div>


    <div class ="voic" style="clear:both;margin-top: 180px">
        <div class="word" style="width: 350px;margin-left: 100px;float: left">
            <p style="font-size: 25px;">
                <span>VOS语音助理</span><br/><span style="line-height: 22px;">Speech Assistant</span>
            </p>
            <p style="font-size: 12px;margin-top: 22px;">
                我是一个好孩子，好孩子顶顶顶顶顶顶顶顶短短的短短的方法地方方法发方法人噶而噶而顶顶顶顶顶顶顶顶短短的顶顶顶顶的大法官很快乐快递费看过看了看看来。
            </p>
        </div>

            <img style="margin-left: 95px"src="<?php echo $this->staticUrl('index/vos.jpg'); ?>"/>

    </div>

    <div class="cloud" style="width:100%;height:320px ;background: url('<?php echo $this->staticUrl('index/cloud.jpg'); ?>') no-repeat center center ; " >
        <div class="word" style="width: 200px;margin-left: 780px;padding-top: 50px;color: white;">
            <p style="font-size: 25px;">
                <span>多重云</span><br/><span >Multiple Cloud</span>
            </p>
            <p style="font-size: 12px;margin-top: 22px;">
                我是一个好孩子，好孩子顶顶顶顶顶顶顶顶短短的短短的方法地方方法发方法人噶而噶而顶顶顶顶顶顶顶顶短短的顶顶顶顶的大法官很快乐快递费看过看了看看来。
            </p>
        </div>
    </div>

    <div class ="browser" style="margin-top: 30px;">
        <div class="word" style="width: 350px;margin-left: 100px;float: left">
            <p style="font-size: 25px;">
                <span>浏览器</span><br/><span style="line-height: 22px;">Browser</span>
            </p>
            <p style="font-size: 12px;margin-top: 22px;">
                我是一个好孩子，好孩子顶顶顶顶顶顶顶顶短短的短短的方法地方方法发方法人噶而噶而顶顶顶顶顶顶顶顶短短的顶顶顶顶的大法官很快乐快递费看过看了看看来。
            </p>
        </div>

            <img style="margin-left: 95px"src="<?php echo $this->staticUrl('index/browser.jpg'); ?>"/>

    </div>
<!--    <hr style="background-color: rgb(255, 173, 47);height: 3px;width: 1000px;border: none;">-->


</div>


