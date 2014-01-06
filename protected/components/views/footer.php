
<style>
.text_center{
    text-align: center;
}
.footer_info span{
    padding: 0 15px;
}
</style>
<div style="background-color: rgb(255, 173, 47);height: 2px;width: 100%;border: 1px;"></div>
<div class="footer">
    <div>
        <div class="footer_info text_center">
                <a href="<?php echo Yii::app()->createUrl('about/index'); ?>"><span>关于我们</span></a>
                <a href="<?php echo Yii::app()->createUrl('about/contact'); ?>"><span>联系我们</span></a>
                <a href="<?php echo Yii::app()->createUrl('news/index'); ?>"><span>最新动态</span></a>
                <a href="http://developer.china-cos.com/signup/"><span>开发者注册</span></a>
                <a href="http://developer.china-cos.com/user/"><span>开发者管理</span></a>
                <a href="<?php echo Yii::app()->createUrl('site/privacy'); ?>"><span>服务条款</span></a>

        </div>
    </div>

    <div style="text-align: center;padding: 20px 0;">
         沪ICP备13014147
    </div>

</div>
