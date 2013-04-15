<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->widget('DevWidget');?>
<style>
    .dev_dbody{
        padding: 20px 70px;
    }
    .dev_dphoto{
        text-align: center;
        margin: 20px auto;
    }
    .dev_dtitle{
        display: block;
        font-size: 24px;
        color: #e69c42;
        margin: 10px auto;
        text-align: center;
    }
    .dev_dbody p{
        text-indent: 35px;
    }
</style>
<div class="dev_dbody">


    <div>
        <span class="dev_dtitle">1.5GHz四核超强99张连拍HTC One X</span>
        <p>HTC执行长周永明表示：“人们总是希望能够以相片或歌曲来记录或纪念生活中最精彩与美好的当下，
        而这样的消费者心声便是HTC One系列的设计原点与创意初衷。我们相信HTC One精湛的拍摄功能
        与忠于原音的高音质效果将让使用者爱不释手，不仅是划时代的移动通信产品，更以前所未有的方式提供最佳的个人化使用体验。”</p>

        <div class="dev_dphoto"><img src="<?php echo $this->staticUrl('news/newsDetail/news_big_1.jpg'); ?>" /><br/><span>xx在发布会现场侃侃而谈</span></div>

        <p>
                HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0
            ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。
            北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon
            600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬
            声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇
            聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[3]
        </p>
        <p>
            HTC One赶在三星Galaxy S4和苹果iPhone 5S之前发布，400万像素UltraPixel相机堪称智能手机史上的一大创新。这枚1/3英寸BSI Ult
            raPixel全新摄像头拥有F/2.0光圈，进光量是传统传感器的3倍以上，低光性能显著提高。它支持进阶360度全景、多轴光学防震、多影像组合等
            功能。该机采用一体成型的铝合金机身，内置HTC Sense 5.0 UI，搭载Snapdragon 600四核处理器，整体性能相比骁龙S4 Pro提升了40%，而且具有更低的功耗。[4]
        </p>
    </div>

     <!-- ===========================翻页====================== -->
<!--    <div class="green-black">

        <?php $this->widget('MyLinkPager', array(
            'pages' => $pages,
        )) ?>
    </div>-->



</div>