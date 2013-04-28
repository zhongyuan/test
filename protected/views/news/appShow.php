
<style>
    .app_sbody{
        padding: 0px 70px;

    }
	
    .app_sli li{
        width: 100%;
        height: 188px;
        margin: 20px 0;
    }
	.app_sli li img.left_img{
		float: left;
		clear: left;
	}
    .app_sli li img:first-child{
        display: inline-block;
        vertical-align: top;
    }
    .app_sli li p{
        width: 655px;
        height: 188px;
        font-size: 14px;
        display: inline-block;
        vertical-align: top;
        position: relative;
    }
    .app_stitle{
        font-size: 24px;
        color: black;
    }
    .app_stitle2{
        font-size: 16px;
        color: gray;
    }
    .app_sanrow{
        position: absolute;
        bottom: 10px;
        right: 10px;
    }
	.work_detail{
		font-size: 12px;
	}
</style>

<?php $this->widget('AppWidget');?>


<div class="app_sbody global_f" id="replace">
    <ul class="app_sli">
        <?php foreach($models as $m):?>
			<li>
	            <img src="<?php echo $this->staticUrl('news/worksUpload/big/work_1.jpg'); ?>" class="left_img"/>
	            <p>
	                <span class="app_stitle"><?php echo $m['work_name'];?></span> <span class="app_stitle2"><?php echo $m['work_brief']?></span> <br/>
	                <span class="work_detail"><?php echo $m['work_detail'];?></span>
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