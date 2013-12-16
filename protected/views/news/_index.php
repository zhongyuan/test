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