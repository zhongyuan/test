<div id="replace">
    <div class="devScene">
        <ul>
			<?php foreach($models as $model):?>
				<li>
				<span><img src="<?php echo $this->staticUrl($this->_mapImagePath($model['img_name']));?>" /></span>
                <!--<span><img src="<?php echo $this->staticUrl('news/newsList/devScene/'.$model['img_name']); ?>" /></span>-->
            	</li>
			<?php endforeach;?>
            
            
        </ul>
    </div>
	
	<!-- ===========================翻页====================== -->

    <div class="green-black">

        <?php $this->widget('MyLinkPager', array(
            'pages' => $pages,
        )) ?>
    </div>
</div>
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