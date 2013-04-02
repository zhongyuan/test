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
    .devScene ul li{
        margin:30px 0;
    }
    .devScene li span{
        padding: 0 16px;
    }
</style>

<div >
    <div class="devScene">
        <ul>
            <li>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_1.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_2.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_3.jpg'); ?>" /></span>
            </li>
            <li>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_2.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_3.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_2.jpg'); ?>" /></span>
            </li>
            <li>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_1.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_3.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_2.jpg'); ?>" /></span>
            </li>
            <li>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_3.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_2.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_3.jpg'); ?>" /></span>
            </li>
            <li>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_1.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_2.jpg'); ?>" /></span>
                <span><img src="<?php echo $this->staticUrl('devScene/scene_3.jpg'); ?>" /></span>
            </li>
        </ul>
    </div>
</div>