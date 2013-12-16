<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newsIndex.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/news_slider.css"  />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bjqs-1.3.js"></script>

<div>
	<div class="big_banner">
		<div class="frm">
			<div class="content">
			<img src="<?php echo $this->staticUrl('news/index/new_banner.jpg');?>" title="COS智能操作系统正式发布"/>
			</div>
		</div>
	</div>
	
	

    <div style="clear:both"></div>

    <div id ="replace">
        <div class="n_detail">
			<div class="info">
				<h1><?php echo $news_info['title'];?></h1>
				<?php echo $news_info['news_detail'];?>
			</div>
		</div>
<!-- ===========================翻页====================== -->

        <!--<div class="green-black">
            <?php
                $this->widget('MyLinkPager',array(
                    'pages'=>$pages,
                ));
            ?>
        </div>-->

    </div>
</div>



<script>
    /*$(function(){
          $('#banner-slide').bjqs({
            animtype      : 'slide',
            height        : 350,
            width         : 800,
            responsive    : true,
            showmarkers   : true,
            prevtext      : '<span class="newsAnrow_left anrow_hover"></span>',
            nexttext      : '<span class="newsAnrow_right anrow_hover"></span>',
            usecaptions   :false,
          });

		$(function(){
            $('.yiiPager a').click(function(){
                $.ajax({
                    url:$(this).attr('href'),
                    success:function(res){
                        $('#devDetail_replace').html(res);
                    }
                });
                return false;
            });
        });	

       
    });*/
</script>

