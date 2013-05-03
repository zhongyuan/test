<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php $this->widget('DevWidget');?>


<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newsIndex.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/news_slider.css"  />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bjqs-1.3.js"></script>

<div>

      <!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner-slide">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><a href=""><img src="<?php echo $this->staticUrl('news/index/news_first_1.jpg')?>" title="Automatically generated caption"></a></li>
          <li><a href=""><img src="<?php echo $this->staticUrl('news/index/news_first_1.jpg')?>" title="Automatically generated caption"></a></li>
          <li><a href=""><img src="<?php echo $this->staticUrl('news/index/news_first_1.jpg')?>" title="Automatically generated caption"></a></li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->


	<div class="news_container">
		<div class="short_news" style="margin-top: 15px;float: left;overflow: hidden;">
	        <div class="news_second_1" style="width:350px;" >
	            <div><img src="<?php echo $this->staticUrl('news/index/news_second_1.jpg');?>"  width="150"/></div>

	            <div class="news_pub">
	                <p class="news_sub_title">创新发布会</p>
	                <p class="news_sub_detail">
						2013年4月1日<br />COS发布会召开<br />各位大虾都非常有兴趣
					</p>

	                <a href="#"><img class="news_pub_more" src="<?php echo $this->staticUrl('news/index/more.jpg');?>" /></a>
	            </div>

	        </div>

	        <div style="overflow:hidden;height: 150px;width: 1px;background-color: #c2c4c8;"></div>

	        <div class="news_second_2" style="width:352px;" >
	            <div style="margin-left:20px"><img src="<?php echo $this->staticUrl('news/index/news_second_2.jpg');?>" width="110"/></div>

	            <div class="news_up">
	                <p class="news_sub_title">平板系统升级</p>
	                <p class="news_sub_detail">
						最新系统支持平板电脑2.0<br />以上系统升级，并且免费。
					</p>

	                <a href="#">
						<img class="news_up_more" src="<?php echo $this->staticUrl('news/index/more.jpg');?>" />
					</a>
	                <img class="news_up_robert" src="<?php echo $this->staticUrl('news/index/news_robert.jpg');?>" />
	            </div>
	        </div>

	        <div  style="overflow:hidden;height: 150px;width: 1px;background-color: #c2c4c8;margin-left: -4px;"></div>

	        <div class="news_second_3" style="width: 282px;">


	            <div class="news_exp">
	                <p class="news_sub_title">创新使用者经验</p>

					<div>

						<div class="news_exp_desc">
							<p class="news_sub_detail">
							五月天的美国<br />可以重游旧地。<br />旅游心情真好。
							</p>

							<a href="#">
			                <img class="news_exp_more" src="<?php echo $this->staticUrl('news/index/more.jpg');?>" />
							</a>
						</div>
						<img class="news_exp_pic" src="<?php echo $this->staticUrl('news/index/news_second_3.jpg');?>" width="175"/>



					</div>
	            </div>

	        </div>

	        <div  style="overflow:hidden;height: 1px;width: 1000px;background-color: #c2c4c8;clear: both;"></div>

	    </div>
	</div>
    

    <div style="clear:both"></div>

    <div id ="replace">
        <div class="news_container" style="margin-top:20px">



            <?php $i = 1;foreach($models as $model):
				$i++;
				if($i%2==1):
			?>
        <!--    // 显示一个模型-->
                <div class="news_box">
                        <div class="words" style="width:530px;float: left;line-height: 25px;">
                                <p class="news_title"><?php echo $model->title; ?></p>
                                <p class="news_outline"><?php echo $model->outline; ?> </p>

                        </div>
                        <div class="photo" style="float: left;margin-left: 150px;">
                            <img src="<?php echo $this->staticUrl('news/newsList/latestNews/'.$model->image_name);?>" />
                        </div>
                </div>


           		<?php else:?>

                <div class="news_box">
                        <div class="photo" style="float: left;">
                            <img src="<?php echo $this->staticUrl('news/newsList/latestNews/'.$model->image_name);?>" />
                        </div>
                        <div class="words" style="width:530px;float: left;margin-left: 150px;line-height: 25px;">
                                <p class="news_title"><?php echo $model->title?></p>
                                <p class="news_outline"><?php echo $model->outline;?></p>

                        </div>

                </div>
				<?php endif;?>
                <div  style="overflow:hidden;height: 1px;width: 1000px;background-color: #c2c4c8;clear: both;"></div>
            <?php endforeach;?>

        </div>

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

