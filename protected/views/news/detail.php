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
				<!--<p>在年底促销旺季即将来临之际，贵州电信网上营业厅天翼卖场(http://shop.gz.189.cn)也即将在12月1日启动历时12天的“天翼联欢会”。在这12天的优惠活动里HTC one参团预售，iPhone5降至3988元，299元购即可购TCL J210C。天翼卖场的工作人员表示，卖场希望通过本次活动开启辞旧迎新活动的序幕，同时也为提高电信营业厅的人流量，从而扩大天翼卖场的知名度和影响力。</p>
				<p>在年底促销旺季即将来临之际，贵州电信网上营业厅天翼卖场(http://shop.gz.189.cn)也即将在12月1日启动历时12天的“天翼联欢会”。在这12天的优惠活动里HTC one参团预售，iPhone5降至3988元，299元购即可购TCL J210C。天翼卖场的工作人员表示，卖场希望通过本次活动开启辞旧迎新活动的序幕，同时也为提高电信营业厅的人流量，从而扩大天翼卖场的知名度和影响力。</p>
				<p>在年底促销旺季即将来临之际，贵州电信网上营业厅天翼卖场(http://shop.gz.189.cn)也即将在12月1日启动历时12天的“天翼联欢会”。在这12天的优惠活动里HTC one参团预售，iPhone5降至3988元，299元购即可购TCL J210C。天翼卖场的工作人员表示，卖场希望通过本次活动开启辞旧迎新活动的序幕，同时也为提高电信营业厅的人流量，从而扩大天翼卖场的知名度和影响力。</p>
				<div class="detail_img"><img src="<?php echo $this->staticUrl('news/index/banner5_picture.jpg');?>"/></div>
				
				<p>在年底促销旺季即将来临之际，贵州电信网上营业厅天翼卖场(http://shop.gz.189.cn)也即将在12月1日启动历时12天的“天翼联欢会”。在这12天的优惠活动里HTC one参团预售，iPhone5降至3988元，299元购即可购TCL J210C。天翼卖场的工作人员表示，卖场希望通过本次活动开启辞旧迎新活动的序幕，同时也为提高电信营业厅的人流量，从而扩大天翼卖场的知名度和影响力。在年底促销旺季即将来临之际，贵州电信网上营业厅天翼卖场(http://shop.gz.189.cn)也即将在12月1日启动历时12天的“天翼联欢会”。在这12天的优惠活动里HTC one参团预售，iPhone5降至3988元，299元购即可购TCL J210C。天翼卖场的工作人员表示，卖场希望通过本次活动开启辞旧迎新活动的序幕，同时也为提高电信营业厅的人流量，从而扩大天翼卖场的知名度和影响力。在年底促销旺季即将来临之际，贵州电信网上营业厅天翼卖场(http://shop.gz.189.cn)也即将在12月1日启动历时12天的“天翼联欢会”。在这12天的优惠活动里HTC one参团预售，iPhone5降至3988元，299元购即可购TCL J210C。天翼卖场的工作人员表示，卖场希望通过本次活动开启辞旧迎新活动的序幕，同时也为提高电信营业厅的人流量，从而扩大天翼卖场的知名度和影响力。在年底促销旺季即将来临之际，贵州电信网上营业厅天翼卖场(http://shop.gz.189.cn)也即将在12月1日启动历时12天的“天翼联欢会”。在这12天的优惠活动里HTC one参团预售，iPhone5降至3988元，299元购即可购TCL J210C。天翼卖场的工作人员表示，卖场希望通过本次活动开启辞旧迎新活动的序幕，同时也为提高电信营业厅的人流量，从而扩大天翼卖场的知名度和影响力。</p>-->
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

