
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
                <li><?php echo Yii::t('main','map');?></li>
                <li><?php echo Yii::t('main','hot_news');?></li>
                <li><?php echo Yii::t('main','media_center');?></li>
                <li><?php echo Yii::t('main','work_chance');?></li>
                <li><?php echo Yii::t('main','contact_us');?></li>
            </ul>
        </div>

        <div class="font_11 text_center"><?php echo Yii::t('main','visite_cos_store');?>,<br/><?php echo Yii::t('main','retail_cos_store');?></div>
        
    </div>


    <div style="clear: both;text-align: center;padding: 20px 0;">
        <?php echo Yii::t('main','cos_beian');?>
    </div>

</div>