
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
<div class="footer">
    <div>
        <div class="footer_link">
            <ul>
				<li><a href="<?php echo Yii::app()->createUrl('about/index'); ?>">关于我们</a></li>
				<li><a href="<?php echo Yii::app()->createUrl('about/contact'); ?>">联系我们</a></li>
				<li><a href="<?php echo Yii::app()->createUrl('news/index'); ?>">最新动态</a></li>
				<li><a href="http://developer.china-cos.com/signup/">开发者注册</a></li>
				<li><a href="http://developer.china-cos.com/user/">开发者管理</a></li>
				<li><a href="<?php echo Yii::app()->createUrl('site/privacy'); ?>">服务条款</a></li>
            </ul>
        </div>

        <!--<div class="font_11 text_center"><?php echo Yii::t('main','visite_cos_store');?>,<br/><?php echo Yii::t('main','retail_cos_store');?></div>-->
        
    </div>


    <div style="clear: both;text-align: center;padding: 20px 0;">
         沪ICP备13014147
    </div>

</div>