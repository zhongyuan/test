<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<style>
    .devPhoto{
        display: block;
        width: 100%;
    }
    .c_menu li{
        float: left;
        padding: 7px 10px;
/*        display: inline-block; li 可以不需要定义行内块*/
    }
    .c_menu{
         display: inline-block;
    }
    .c_menu a{
        font-weight: bold;
        /*padding: 0 20px;*/
    }
    .devList{
        padding: 9px;
        text-align:center;
        overflow:hidden;
        border-bottom: thin solid gray;
        background-color: rgb(250, 250, 250);
    }
    .hide_left{
        background-color: #0F0D0D;
        display: inline-block;
        height: 12px;
        width: 1px;
        overflow: hidden;
    }
    .currentItem2{
        background-color: #DDD6D6;
    }

</style>

<div>
<img class="devPhoto" src="<?php echo Yii::app()->baseUrl.'/images/devIndex/dev_big.jpg'; ?>"></img>
</div>

<div class="devList" >
    <ul class="c_menu">
        <li class="<?php echo $action == 'devIndex'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devIndex'); ?>"><span>大会首页</span></a>
        </li>
<!--        <li><span class="hide_left"></span></li>
        <li class="<?php echo $action == 'devDetail'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devDetail'); ?>">大会详情</a>
        </li>-->
        <li><span class="hide_left"></span></li>
        <li class="<?php echo $action == 'devReport'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devReport'); ?>">新闻报道</a>
        </li>
        <li><span class="hide_left"></span></li>
        <li class="<?php echo $action == 'devReceipt'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devReceipt'); ?>">开具发票</a>
        </li>
        <li><span class="hide_left"></span></li>
        <li class="<?php echo $action == 'devManual'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devManual'); ?>">大会指南</a>
        </li>
        <li><span class="hide_left"></span></li>
<!--        <li class="<?php echo $action == 'devIndex'?'currentItem2':null ?>">
            <a>精彩回顾</a>
        </li>
        <li><span class="hide_left"></span></li>-->
        <li class="<?php echo $action == 'devScene'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devScene'); ?>">大会现场</a>
        </li>
    </ul>
</div>