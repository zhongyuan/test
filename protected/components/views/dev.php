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
		font-size: 14px;
		
/*        display: inline-block; li 可以不需要定义行内块*/
    }
    .c_menu{
         display: inline-block;
    }
    .c_menu a{
        font-weight: bold;
		color: #3A3A3A;
        /*padding: 0 20px;*/
    }
	.c_menu a:hover{
		text-decoration: underline;
	}
    .devList{
        padding: 9px;
        text-align:center;
        overflow:hidden;
        border-bottom: thin solid gray;
        background-color: rgb(250, 250, 250);
    }
    .hide_left{
        background-color: #C7C7C7;
        display: inline-block;
        height: 14px;
		margin-top: 4px;
        width: 1px;
		
        overflow: hidden;
    }
    .currentItem2{
        background-color: #E4E4E4;
		border-radius: 5px;
    }

</style>

<div>
<img class="devPhoto" src="<?php echo Yii::app()->baseUrl.'/images/news/dev/dev_big.jpg'; ?>"></img>
</div>

<div class="devList" >
    <ul class="c_menu">
        <li class="<?php echo $action == 'devIndex'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devIndex'); ?>"><span><?php echo Yii::t('news','meetings_home');?></span></a>
        </li>
        <li><span class="hide_left"></span></li>
        <li class="<?php echo $action == 'devReport'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devReport'); ?>"><?php echo Yii::t('news','news_report');?></a>
        </li>
        <!-- <li><span class="hide_left"></span></li>
       <li class="<?php echo $action == 'devReceipt'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devReceipt'); ?>"><?php echo Yii::t('news','make_receipt');?></a>
        </li>-->
        <li><span class="hide_left"></span></li>
        <li class="<?php echo $action == 'devManual'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devManual'); ?>"><?php echo Yii::t('news','meetings_guide');?></a>
        </li>
        <li><span class="hide_left"></span></li>
        <li class="<?php echo $action == 'devScene'?'currentItem2':null ?>">
            <a href="<?php echo Yii::app()->createUrl('news/devScene'); ?>"><?php echo Yii::t('news','meetings_scene');?></a>
        </li>
    </ul>
</div>