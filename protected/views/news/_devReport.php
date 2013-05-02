<div id="search_list">
	<?php
		$i = 0;
		$maxCnt = count($models);
		foreach($models as $model):
		$i++;
	?>
	    <div class="devReport_news">
	            <div>
	                <img src="<?php echo Yii::app()->baseUrl.'/images/news/newsList/devReport/devReport_1.jpg'; ?>" />
	            </div>
	            <div class="devReport_word">
	                <p class="devReport_title"><?php echo $model['title']?></p>
	                <p class="devReport_content"><?php echo $model['outline']?>
					&nbsp&nbsp&nbsp<a style="color:#cccccc" href="<?php echo Yii::app()->createUrl('news/devDetail',array('news_id' => $model['id'])); ?>">[查看详情]</a>
	                </p>
	            </div>

	    </div>

		<?php
			if ($i<$maxCnt):
		?>
			<div class="horizon_line"></div>
		<?php
			endif;
		?>
	<?php endforeach;?>
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