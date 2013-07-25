

<?php $this->widget('AppWidget');?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/appShow.css"  />
<div class="app_sbody global_f" id="replace">
    <ul class="app_sli">
        <?php foreach($models as $m):?>
			<li>
	            <img src="<?php echo $this->staticUrl('news/worksUpload/big/work_1.jpg'); ?>" class="left_img"/>
	            <p>
	                <span class="app_stitle"><?php echo $m['work_name'];?></span> <span class="app_stitle2"><?php echo $m['work_brief']?></span> <br/>
	                <span class="work_detail font_7"><?php echo $m['work_detail'];?></span>
	                <img class="app_sanrow" src="<?php echo $this->staticUrl('news/app/anrow_down.jpg'); ?>" />
	            </p>
	        </li>
		<?php endforeach;?>
    </ul>


    <!-- ===========================翻页====================== -->

    <div class="green-black">

        <?php $this->widget('MyLinkPager', array(
            'pages' => $pages,
			'maxButtonCount' =>5
        )) ?>
    </div>

</div>





<script>
$(function(){
    $('.yiiPager a').click(function(){
		var url = $(this).attr('href');
        $.ajax({
            url:url,
            success:function(html){
                $('#replace').html(html);
				return false;
            }
        });
        return false;
    });
});
</script>