
    <div class="long_news" style="margin-top:20px">
    <?php $i = 1;foreach($models as $model){ if($i%2==1){?>
<!--    // 显示一个模型-->
        <div style="padding:20px 0px;float: left">
                <div class="words" style="width:530px;float: left;line-height: 25px;">
                        <p style="font-size:18px;font-weight: bold;text-align:center"><?php echo $model->title; ?></p>
                        <p style="font-size:14px;margin-top: 14px;"><?php echo $model->outline; ?> </p>


		                </div>
		                <div class="photo" style="float: left;margin-left: 150px;">
		                    <img src="<?php echo $this->staticUrl('news/newsList/latestNews/'.$model->image_name);?>" />
		                </div>
		        </div>


		   <?php  }else{  ?>

		        <div style="padding:20px 0px;float: left">
		                <div class="photo" style="float: left;">
		                    <img src="<?php echo $this->staticUrl('news/newsList/latestNews/'.$model->image_name);?>" />
		                </div>
		                <div class="words" style="width:530px;float: left;margin-left: 150px;line-height: 25px;">
		                        <p style="font-size:18px;font-weight: bold;text-align:center">COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！</p>
		                        <p style="font-size:14px;margin-top: 14px;">在HTC 2012年的年会上，HTC CEO周永明展示了一款神秘的手机。这款手机大家纷纷猜测可能看看看
		                            看看看看看库顶顶顶顶顶顶顶顶短短的顶顶顶顶顶顶顶顶顶顶顶反反复复反反复复，顶顶顶顶顶顶顶顶短短的。</p>

		                </div>

		        </div>

		    <?php } ?>
		                <div  style="overflow:hidden;height: 1px;width: 1000px;background-color: #c2c4c8;clear: both;"></div>
		    <?php $i++;}; ?>
		</div>
		<div class="green-black">
		     <?php   $this->widget('MyLinkPager',array(
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
