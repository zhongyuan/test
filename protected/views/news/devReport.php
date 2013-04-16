


<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/devReport.css"  />

	
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
					&nbsp&nbsp&nbsp<a style="color:#cccccc" href="<?php echo Yii::app()->createUrl(''); ?>">[查看详情]</a>
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
	
	
	<!-- ===========================翻页====================== -->

    <div class="green-black">

        <?php $this->widget('MyLinkPager', array(
            'pages' => $pages,
        )) ?>
    </div>
	
	<script>
    $(function(){
        $('.yiiPager a').click(function(){
			var url = $(this).attr('href');
            $.ajax({
                url:url,
                success:function(html){
                    $('#search_list').html(html);
                    //alert('dfad');
					return false;
                }
            });
            return false;
        });
    });
	</script>

