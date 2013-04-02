<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
    .short_news,.short_news div{
        float: left;
    }
    .page li{
        float:left;
    }

</style>

<div>

    <div class="nav_images" style="padding: 0 70px;height:400px">
        <img src="<?php echo $this->staticUrl('news/news_first_1.jpg');?>" />
    </div>

    <div class="short_news" style="width:100%;margin-top: 15px;float: left">
        <div class="news_second_1" style="width:33%" >
            <div><img src="<?php echo $this->staticUrl('news/news_second_1.jpg');?>" /></div>

            <div style='width: 150px;'>
                <p style='font-size: 18px; text-align: center;'>创新发布会</p>
                <p style="font-size: 12px;line-height: 18px;margin-top: 12px;width: 110px;margin-left: 35px;">电视不是一个好东西，哈哈哈哈哈哈哈，好开心呜呜呜哈哈</p>

                <img style="margin-left: 100px;margin-top: 30px;" src="<?php echo $this->staticUrl('news/more.jpg');?>" />
            </div>

        </div>

        <div style="overflow:hidden;height: 150px;width: 1px;background-color: #c2c4c8;"></div>

        <div class="news_second_2" style="width:32%;" >
            <div style="margin-left:20px"><img src="<?php echo $this->staticUrl('news/news_second_2.jpg');?>" /></div>

            <div style='width: 150px;margin-left: 35px;'>
                <p style='font-size: 18px;'>平板系统升级</p>
                <p style="font-size: 12px;line-height: 18px;margin-top: 12px;">电视不是一个好东西，哈哈哈哈哈哈哈，好开心哈</p>

                <img style="margin-left: 20px;margin-top: 30px;" src="<?php echo $this->staticUrl('news/more.jpg');?>" />
                <img style="margin-left: 13px;margin-top: 10px;" src="<?php echo $this->staticUrl('news/news_robert.jpg');?>" />
            </div>
        </div>

        <div  style="overflow:hidden;height: 150px;width: 1px;background-color: #c2c4c8;margin-left: -4px;"></div>

        <div class="news_second_3">


            <div style='width: 150px;'>
                <p style='font-size: 18px; text-align: center;'>创新使用者经验</p>
                <p style="font-size: 12px;line-height: 18px;margin-top: 12px;width: 110px;">电视不是一个好东西，哈哈哈呜呜哈哈</p>

                <img style="margin-left: 20px;margin-top: 30px;" src="<?php echo $this->staticUrl('news/more.jpg');?>" />
            </div>
            <div><img src="<?php echo $this->staticUrl('news/news_second_3.jpg');?>" /></div>

        </div>

        <div  style="overflow:hidden;height: 1px;width: 1000px;background-color: #c2c4c8;"></div>

    </div>

    <div style="clear:both"></div>

    <div class="long_news" style="margin-top:20px">

    <?php $i = 1;foreach($models as $model){ if($i%2==1){?>
<!--    // 显示一个模型-->
        <div style="padding:20px 0px;float: left">
                <div class="words" style="width:530px;float: left;line-height: 25px;">
                        <p style="font-size:18px;font-weight: bold;text-align:center"><?php echo $model->title; ?></p>
                        <p style="font-size:14px;margin-top: 14px;"><?php echo $model->outline; ?> </p>

                </div>
                <div class="photo" style="float: left;margin-left: 150px;">
                    <img src="<?php echo $this->staticUrl('news/news_third_3.jpg');?>" />
                </div>
        </div>


   <?php  }else{  ?>

        <div style="padding:20px 0px;float: left">
                <div class="photo" style="float: left;">
                    <img src="<?php echo $this->staticUrl('news/news_third_2.jpg');?>" />
                </div>
                <div class="words" style="width:530px;float: left;margin-left: 150px;line-height: 25px;">
                        <p style="font-size:18px;font-weight: bold;text-align:center">COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！</p>
                        <p style="font-size:14px;margin-top: 14px;">在HTC 2012年的年会上，HTC CEO周永明展示了一款神秘的手机。这款手机大家纷纷猜测可能看看看
                            看看看看看库顶顶顶顶顶顶顶顶短短的顶顶顶顶顶顶顶顶顶顶顶反反复复反反复复，顶顶顶顶顶顶顶顶短短的。</p>

                </div>

        </div>

    <?php } ?>
                <div  style="overflow:hidden;height: 1px;width: 1000px;background-color: #c2c4c8;"></div>
    <?php $i++;}; ?>


    </div>

<!-- ===========================翻页====================== -->

    <div class="green-black">

        <?php $this->widget('MyLinkPager', array(
            'pages' => $pages,
        )) ?>
    </div>


</div>