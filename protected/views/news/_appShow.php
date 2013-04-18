<ul class="app_sli">
    <?php foreach($models as $m):?>
		<li>
            <img src="<?php echo $this->staticUrl($this->_mapImagePath($m['work_icon'],6)); ?>" class="left_img"/>
            <p>
                <span class="app_stitle"><?php echo $m['work_name'];?></span> <span class="app_stitle2">&nbsp;</span> <br/>
                <span><?php echo $m['work_brief'];?></span>
                <img class="app_sanrow" src="<?php echo $this->staticUrl('news/app/anrow_down.jpg'); ?>" />
            </p>
        </li>
	<?php endforeach;?>        
</ul>


<!-- ===========================翻页====================== -->

<div class="green-black">

    <?php $this->widget('MyLinkPager', array(
        'pages' => $pages,
		'maxButtonCount' =>5
    )) ?>
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