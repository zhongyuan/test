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
	<div class="dd">
		<div class="mm">
			<div class="ff"><img src="<?php echo $this->staticUrl('news/index/news_banner.jpg');?>" title="社会化媒体平台的方兴未艾"/></div>
		</div>
	</div>
	
	
	

    <div style="clear:both"></div>

    <div id ="replace">
        <div class="nlist2">
			<img src="<?php echo $this->staticUrl('news/index/banner2_picture.jpg');?>" class="left"/>
			<div class="pright">
				<h1>宏达国际电子股份有限公司</h1>
				<p>2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间。至此，今年以来，HTC离职高管人数已经增加至8人。公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发。2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间。至此，今年以来，HTC离职高管人数已经增加至8人。公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发。<a href="#" class="detail">[查看详情]</a></p>
			</div>
			<div class="split"></div>
        </div>
		
		<div class="nlist2">
			<img src="<?php echo $this->staticUrl('news/index/banner3_picture.jpg');?>" class="left"/>
			<div class="pright">
				<h1>宏达国际电子股份有限公司</h1>
				<p>2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间。至此，今年以来，HTC离职高管人数已经增加至8人。公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发。2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间。至此，今年以来，HTC离职高管人数已经增加至8人。公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发。<a href="#" class="detail">[查看详情]</a></p>
			</div>
			<div class="split"></div>
        </div>
		
		<div class="nlist2">
			<img src="<?php echo $this->staticUrl('news/index/banner4_picture.jpg');?>" class="left"/>
			<div class="pright">
				<h1>宏达国际电子股份有限公司</h1>
				<p>2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间。至此，今年以来，HTC离职高管人数已经增加至8人。公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发。2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间。至此，今年以来，HTC离职高管人数已经增加至8人。公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发。<a href="#" class="detail">[查看详情]</a></p>
			</div>
			<div class="split"></div>
        </div>
		
		<div class="nlist2">
			<img src="<?php echo $this->staticUrl('news/index/banner5_picture.jpg');?>" class="left"/>
			<div class="pright">
				<h1>宏达国际电子股份有限公司</h1>
				<p>2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间。至此，今年以来，HTC离职高管人数已经增加至8人。公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发。2013年10月21日，该公司副总裁兼全球公关和沟通副总经理黄文采已经离职，而黄文采加盟HTC才只有四个月时间。至此，今年以来，HTC离职高管人数已经增加至8人。公司已决定由创始人兼董事长王雪红接手公司的部分日常管理工作，而现任CEO周永明将部分卸担子，转而专注于产品研发。<a href="#" class="detail">[查看详情]</a></p>
			</div>
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

