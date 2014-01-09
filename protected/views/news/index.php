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
	<div class="dd news_banner">
        <div class="mm">
            <div class="ff">
                <img src="<?php echo $this->staticUrl('news/index/new_1.jpg'); ?>">
                <img src="<?php echo $this->staticUrl('news/index/new_2.jpg'); ?>">
            </div>
        </div>
    </div>
	
    <div style="clear:both"></div>

    <div id ="replace">
		<?php 
			 $idx = 0;
			 foreach($models as $m):
				$idx++;
				if($idx%2 == 0):?>
				<div class="nlist">
					<img src="<?php echo $m->image_name;?>" class="lft"/>
					<div class="pright">
						<h1><a href="<?php echo $this->createUrl('news/detail',array('news_id'=>$m->id));?>" target="_blank"><?php echo $m->title;?></a></h1>
						<p><?php echo $m->outline;?></p>
					</div>
					<div><img src="<?php echo $this->staticUrl('div_split.jpg');?>"/></div>
		        </div>
		<?php	else:?>
				<div class="nlist">
					<div class="pleft c_left">
						<h1><a href="<?php echo $this->createUrl('news/detail',array('news_id'=>$m->id));?>" target="_blank"><?php echo $m->title;?></a></h1>
						<p><?php echo $m->outline;?></p>
					</div>
					<img src="<?php echo $m->image_name;?>" class="rgt"/>
					<div><img src="<?php echo $this->staticUrl('div_split.jpg');?>"/></div>
		        </div>
		<?php	endif;?>
		<?php endforeach;?>
		
<!-- ===========================翻页====================== -->

        <div class="green-black">
            <?php
                $this->widget('MyLinkPager',array(
                    'pages'=>$pages,
                ));
            ?>
        </div>

    </div>
</div>



<script>
    $(function(){
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



        $('.yiiPager a').click(function(){
            $.ajax({
                url:$(this).attr('href'),
                success:function(res){
                    $('#replace').html(res);
                }
            });
            return false;
        });
    });
</script>

