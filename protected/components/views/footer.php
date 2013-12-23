
<style>
    .text_center{
        text-align: center;
    }
    .footer_info li{
        display: inline-block;
        margin: 0 10px;
        text-align: center;
    }
    
</style>
<div style="background-color: rgb(255, 173, 47);height: 2px;width: 100%;border: 1px;"></div>
<div class="footer" >
    <div>
        <div class="footer_info text_center">
            <ul>
                <a href="<?php echo Yii::app()->createUrl('about/index'); ?>"><li>关于我们</li></a>
                <a href="<?php echo Yii::app()->createUrl('about/contact'); ?>"><li>联系我们</li></a>
                <a href="<?php echo Yii::app()->createUrl('news/index'); ?>"><li>最新动态</li></a>
                <a href="<?php echo Yii::app()->createUrl('about/contact'); ?>"><li>开发者注册</li></a>
                <a href="<?php echo Yii::app()->createUrl('about/contact'); ?>"><li>开发者管理</li></a>
                <a href="<?php echo Yii::app()->createUrl('site/privacy'); ?>"><li>服务条款</li></a>
            </ul>
        </div>

        <!--<div class="font_11 text_center"><?php echo Yii::t('main','visite_cos_store');?>,<br/><?php echo Yii::t('main','retail_cos_store');?></div>-->
        
    </div>


    <div style="clear: both;text-align: center;padding: 20px 0;">
        <?php echo Yii::t('main','cos_beian');?>
    </div>

</div>