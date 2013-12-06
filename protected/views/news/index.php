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
			<div class="content"><img src="<?php echo $this->staticUrl('news/index/news_banner.jpg');?>" title="社会化媒体平台的方兴未艾"/></div>
		</div>
	</div>
	
	<div class="news_container">
		<div class="short_news" style="margin-top: 15px;float: left;overflow: hidden;">
	        <div class="news_second_1" style="width:350px;" >
	            <div><img src="<?php echo $this->staticUrl('news/index/news_images_1.jpg');?>"/></div>

	            <div class="news_pub">
	                <p class="font_4 news_sub_title">创新发布会</p>
	                <p class="news_sub_detail">
						2013年4月1日<br />COS发布会召开<br />各位大虾都非常有兴趣
					</p>

	                <a href="#"><img class="news_pub_more" src="<?php echo $this->staticUrl('news/index/more.jpg');?>" /></a>
	            </div>

	        </div>

	        <div style="overflow:hidden;/*height: 155px;*/width: 1px;background-color: #c2c4c8;"></div>

	        <div class="news_second_2" style="width:352px;" >
	            <div style="margin-left:20px"><img src="<?php echo $this->staticUrl('news/index/news_images_2.jpg');?>" width="110"/></div>

	            <div class="news_up">
	                <p class="font_4 news_sub_title">平板系统升级</p>
	                <p class="news_sub_detail">
						最新系统支持平板电脑2.0<br />以上系统升级，并且免费。
					</p>

	                <a href="#">
						<img class="news_up_more" src="<?php echo $this->staticUrl('news/index/more.jpg');?>" />
					</a>
	            </div>
	        </div>

	        <div  style="overflow:hidden;/*height: 155px;*/width: 1px;background-color: #c2c4c8;margin-left: -4px;"></div>

	        <div class="news_second_3" style="width: 282px;">


	            <div class="news_exp">
	                <p class="font_4 news_sub_title">创新使用者经验</p>

					<div>

						<div class="news_exp_desc">
							<p class="news_sub_detail">
							五月天的美国<br />可以重游旧地。<br />旅游心情真好。
							</p>

							<a href="#">
			                <img class="news_exp_more" src="<?php echo $this->staticUrl('news/index/more.jpg');?>" />
							</a>
						</div>
						<img class="news_exp_pic" src="<?php echo $this->staticUrl('news/index/news_images_3.jpg');?>" width="175"/>



					</div>
	            </div>

	        </div>

	        <div  style="overflow:hidden;height: 1px;width: 1000px;background-color: #e5e5e5;clear: both;"></div>

	    </div>
	</div>


    <div style="clear:both"></div>

    <div id ="replace">
        <div class="nlist">
			<div class="pleft c_left">
				<h1><a href="<?php echo $this->createUrl('news/detail');?>">宏达国际电子股份有限公司</a></h1>
				<p>宏达国际电子股份有限公司成立于1997年5月15日，简称宏达电，亦称HTC，由被誉为台湾的“经营之神”的王永庆之女王雪红任董事长，董事暨宏达基金会董事长卓火土，与总经理兼执行长周永明所创立。</p><p>宏达国际电子股份有限公司，简称宏达电子，品牌为“HTC”。是一家位于台湾的手机与平板电脑制造商。是全球最大的Windows Mobile智能手机生产厂商，全球最大的智能手机代工和生产厂商。</p>
			</div>
			<img src="<?php echo $this->staticUrl('news/index/news_images_4.jpg');?>" class="rgt"/>
        </div>
		
		<div class="nlist">
			<img src="<?php echo $this->staticUrl('news/index/news_images_5.jpg');?>" class="lft"/>
			<div class="pright">
				<h1><a href="<?php echo $this->createUrl('news/detail');?>">宏达电运营利润亏损了35亿新台币</a></h1>
				<p>2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间。至此，今年以来，HTC离职高管人数已经增加至8人。</p><p>公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作</p>
			</div>
        </div>
		
		
		<div class="nlist">
			<div class="pleft">
				<h1><a href="<?php echo $this->createUrl('news/detail');?>">创始人兼董事长王雪红接手公司的部分日常管理工作</a></h1>
				<p>
					2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间
				</p>
				<p>至此，今年以来，HTC离职高管人数已经增加至8人。公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发</p>
			</div>
			<img src="<?php echo $this->staticUrl('news/index/news_images_6.jpg');?>" class="rgt"/>
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

