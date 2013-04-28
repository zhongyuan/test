<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->widget('DevWidget');?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/devReport.css"  />

<style>
    .up_down{margin: 30px 0;}
    .manualImg{
        width: 574px;
        display: inline-block;
        margin-left: 60px;
		float: right;
		
    }
    .manualImg img{width: 574px;height: 258px}
    .manual_left{
        width: 320px;
        display: inline-block;
        font-size: 12px;
		float: left;
    }
    .manual{
		overflow: hidden;
    }
    .textIndent{
        text-indent: 2em;
		line-height: 24px;
		color: #666666;
    }
</style>

<div style="padding:0 70px;">
        <div class="devSchedule up_down" >
            <div class ="di_sched" style="margin:0px;"><p class="rule"><span><?php echo Yii::t('news','place_introduce');?></span></p></div>
        </div>

        <div class="manual">
            <div class="manual_left">
                <p class="textIndent">上海国际展览中心坐落于上海最早的经济技术开发区 —— 上海虹桥经济技术开发区内</p>
                <p class="textIndent">从她 1992 年诞生之日起，就为上海的展览业注入了新的活力，成为上海众多品牌展览会的发轫之地，促进了上海展览业的发展。上海国际展览中
                心有限公司（ Intex Shanghai Co.,Ltd. ）是由上海虹桥经济技术开发区联合发展有限公司、上海世博（集团）
                有限公司所属上海市国际展览有限公司及英国P&O公司共同投资建立的上海首家引进国外一流管理模式和经验的展览场
                馆公司，也是世博（集团）所属的展览场馆公司，及全国首家获得 ISO9001 认证的国际性展览馆。</p>
            </div>
            <div class="manualImg"><img  src="<?php echo $this->staticUrl('news/dev/devManual_1.jpg'); ?>" /></div>
        </div>

    <style>
        .manual_left p span{font-size:12px;display: block;}
        .manual_left p span:first-child{font-size:12px;font-weight: bold; margin-top: 20px;}
    </style>
        <div class="devSchedule up_down">
            <div class ="di_sched" style="margin:0px;"><p class="rule"><span><?php echo Yii::t('news','traffice_guide');?></span></p></div>
        </div>
        <div class="manual">
            <div class="manual_left global_f">
                <p><span >公交路线：</span><span>81、82、83、88、32、34、观1、观2、999、333、332</span></p>
                <p><span >地铁路线：</span><span>地铁8号线：乘坐地铁8号线到奥林匹克公园下</span></p>
                <p><span >驾车路线：</span><span>驾车路线：地铁10号线：在北土城站下车，再换乘地铁8号线到奥林匹克公园下</span></p>
            </div>
            <div class="manualImg">
<iframe width="574" height="258" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        src="http://ditu.google.cn/maps?f=q&amp;source=s_q&amp;hl=zh-CN&amp;geocode=&amp;q=%E6%B
        5%A6%E4%B8%9C%E6%96%B0%E5%8C%BA+%E5%8D%9A%E9%9C%9E%E8%B7%AF11%E5%8F%B7&amp;aq=&amp;sll=31.200634
        ,121.604683&amp;sspn=0.006745,0.011362&amp;brcurrent=3,0x35b277c0c6f38231:0x27b7e58bc9f76994,0,0x35ad8c73cd3952c7
        :0xbb190e9364c4e592%3B5,0,0&amp;ie=UTF8&amp;hq=&amp;hnear=%E4%B8%8A%E6%B5%B7%E5%B8%82%E6%B5%A6%E4%B8%9C%E6%96%B0%E5%
        8C%BA%E5%8D%9A%E9%9C%9E%E8%B7%AF11%E5%8F%B7&amp;ll=31.200634,121.604683&amp;spn=0.006745,0.011362&amp;t=m&amp;z=14&amp
        ;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://ditu.google.cn/maps?f=q&amp;source=embed&amp;hl=zh-CN&amp;
                                                    geocode=&amp;q=%E6%B5%A6%E4%B8%9C%E6%96%B0%E5%8C%BA+%E5%8D%9A%E9%9C%9E%E8%B7%AF11%E5
                                                    %8F%B7&amp;aq=&amp;sll=31.200634,121.604683&amp;sspn=0.006745,0.011362&amp;brcurrent=
                                                    3,0x35b277c0c6f38231:0x27b7e58bc9f76994,0,0x35ad8c73cd3952c7:0xbb190e9364c4e592%3B5,0,0&amp
                                                    ;ie=UTF8&amp;hq=&amp;hnear=%E4%B8%8A%E6%B5%B7%E5%B8%82%E6%B5%A6%E4%B8%9C%E6%96%B0%E5%8C%BA
                                                    %E5%8D%9A%E9%9C%9E%E8%B7%AF11%E5%8F%B7&amp;ll=31.200634,121.604683&amp;spn=0.006745,0.01
                                                    1362&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small>

                <!--<img  src="<?php echo $this->staticUrl('news/dev/devManual_2.jpg'); ?>" />-->
            </div>
        </div>


    <style>
        .manual_left li{
            margin-top: 10px;
            font-size: 12px;
        }
    </style>

        <div class="devSchedule up_down">
            <div class ="di_sched" style="margin:0px;"><p class="rule"><span><?php echo Yii::t('news','restaurant');?></span></p></div>
        </div>
        <div class="manual">
            <div class="manual_left global_f">
                <p><span>国际会议中心附近美食<span></p>
                <ul>
                    <li>A:下沉式美食广场</li>
                    <li>B:北辰世纪中心A座美食广场</li>
                    <li>C:北辰洲际酒店</li>
                    <li>D:新奥购物中心</li>
                    <li>E:东郭酒楼</li>
                    <li>F:八先生刷羊肉</li>
                </ul>
            </div>
            <div class="manualImg"><img  src="<?php echo $this->staticUrl('news/dev/devManual_3.jpg'); ?>" /></div>
        </div>
</div>

