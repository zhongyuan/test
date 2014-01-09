<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl('newsIndex.css','css');?>"  />
<?php 
	 $idx = 0;
	 foreach($models as $m):
		$idx++;
		if($idx%2 == 0):?>
		<div class="plist">
				<div class="pleft htc_info">
                        <p>
						<?php echo $m->outline;?>
						</p>
						<div class="read_more"><a href="<?php echo $this->createUrl('partner/detail',array('news_id'=>$m->id));?>" target="_blank">[阅读更多]</a></div>

                </div>
				<img src="<?php echo $m->image_name;?>"  class="htc"/>   
        </div>
		<div><img src="<?php echo $this->staticUrl('div_split.jpg');?>"/></div>


<?php	else:?>
		<div class="plist">
                <img src="<?php echo $m->image_name;?>"  class="via"/>
                <div class="pright via_info">
                        <p>
						<?php echo $m->outline;?>
						</p>
						<div class="read_more"><a href="<?php echo $this->createUrl('partner/detail',array('news_id'=>$m->id));?>" target="_blank">[阅读更多]</a></div>
                </div>
        </div>
		<div><img src="<?php echo $this->staticUrl('div_split.jpg');?>"/></div>
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