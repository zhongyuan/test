<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->widget('DevWidget');?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/devReport.css"  />

<!--Loading Fancybox files-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/fancybox/jquery.fancybox-1.3.4.css"  />

<style>
    .devScene{
        margin: 30px 100px;
        text-align: center;
        margin-bottom: 50px;
    }
	.devScene ul{
		overflow: hidden;
	}
    .devScene ul li{
        margin:30px 0;
		float: left;
    }
    .devScene li span{
        padding: 0 15px;
    }
</style>


<div id="replace">
    <div class="devScene">
        <ul>
			<?php foreach($models as $model):?>
				<li>
				<span>
				<a href="<?php echo $this->staticUrl($this->_mapImagePath($model['img_name']));?>" class="grouped_elements">
					<img src="<?php echo $this->staticUrl($this->_mapImagePath($model['img_name']));?>" />
				</a>
				</span>
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

		$("a.grouped_elements").fancybox(); //init fancybox job.
        $('.yiiPager a').click(function(){
            $.ajax({
                url:$(this).attr('href'),
                success:function(res){
                    $('#replace').html(res);
                }
            });
            return false;
        });
        return false;
    });
</script>
