<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->widget('DevWidget');?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/devReport.css"  />

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

<div >
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