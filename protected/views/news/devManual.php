<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->widget('DevWidget');?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/devManual.css"  />


<div style="padding:0 70px;">
        <div class="devSchedule up_down" >
            <div class ="di_sched" style="margin:0px;"><p class="rule"><span><?php echo Yii::t('news','place_introduce');?></span></p></div>
        </div>

        <div class="manual">
            <div class="manual_left">
                <p class="textIndent">上海博雅酒店位于张江高科技园区碧波路，四周绿茵环绕，景观极具魅力。</p>
                <p class="textIndent">非一般传统酒店的外观，极富现代感的时尚设计风格，饰品简约而细腻。在博雅上海您将体验的
                    是舒适、安静、安全。 距陆家嘴10公里，距上海新国际博览中心仅2公里,离上海浦东国际机场也只有21公里，而距离
                    虹桥国际机场为25公里、到浦东市中心也仅15分钟。 酒店的300间自然景观房，
                    融合了古典的东方元素与现代简约时尚的设计，风格独树一帜。</p>
            </div>
            <div class="manualImg"><img  src="<?php echo $this->staticUrl('news/dev/boya.jpg'); ?>" /></div>
        </div>

        <div class="devSchedule up_down">
            <div class ="di_sched" style="margin:0px;"><p class="rule"><span><?php echo Yii::t('news','traffice_guide');?></span></p></div>
        </div>
        <div class="manual">
            <div class="manual_left global_f">
                <p><span >公交路线：</span><span>161、609、188、636、778、大桥五线、大桥六线</span></p>
                <p><span >地铁路线：</span><span>地铁2号线：乘坐地铁2号线到张江高科站下</span></p>
<!--                <p><span >驾车路线：</span><span>驾车路线：地铁10号线：在北土城站下车，再换乘地铁8号线到奥林匹克公园下</span></p>-->
            </div>
            <div class="manualImg">
            <iframe width="574" height="258" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/wpN-K"></iframe>
                <!--<img  src="<?php echo $this->staticUrl('news/dev/devManual_2.jpg'); ?>" />-->
            </div>
        </div>


        <div class="devSchedule up_down">
            <div class ="di_sched" style="margin:0px;"><p class="rule"><span><?php echo Yii::t('news','restaurant');?></span></p></div>
        </div>
        <div class="manual">
            <div class="manual_left global_f">
                <p><span>上海博雅酒店附近美食<span></p>
                <ul>
                    <li>A:穀屋(上海传奇店)</li>
                    <li>B:喜月小厨</li>
                    <li>C:费尼阁</li>
                    <li>D:棒!约翰</li>
                    <li>E:必胜客</li>
                    <li>F:禾绿回转寿司</li>
                </ul>
            </div>
            <div class="manualImg">
                <img  src="<?php echo $this->staticUrl('news/dev/map.jpg'); ?>" />
            </div>
        </div>
</div>

