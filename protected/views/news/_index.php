<div class="news_container" style="margin-top:20px">
    <?php $i = 1;foreach($models as $model):
		$i++;
		if($i%2==1):
	?>
<!--    // 显示一个模型-->
        <div class="news_box">
                <div class="words" style="width:530px;float: left;line-height: 25px;">
                        <p class="news_title font_4"><?php echo $model->title; ?></p>
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
                        <p class="news_title font_4"><?php echo $model->title?></p>
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


<script>
    $(function(){
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