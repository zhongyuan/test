<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl('fancybox2/jquery.fancybox.css','js'); ?>"/>

<div class="indexbg">
    <div class="dd div_height1">
        <div class="mm">
            <div class="ff">
                <?php if($is_mobile){ ?>
                    <img src="<?php echo $this->staticUrl('index/index_banner_1.jpg'); ?>">
                    <img src="<?php echo $this->staticUrl('index/index_banner_2.jpg'); ?>">
                <?php }else{?>
                    <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1920" height="470">
                        <param name="movie" value="<?php echo $this->staticUrl('index/index_banner.swf');?>" />
                        <param name="quality" value="high" />
                        <param name="wmode" value="opaque" />
                        <param name="swfversion" value="15.0.0.0" />
                        <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
                        <param name="expressinstall" value="Scripts/expressInstall.swf" />
                        <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
                        <!--[if !IE] 比如google safari-->
                        <?php $agent = $_SERVER["HTTP_USER_AGENT"]; if(!strpos($agent,"MSIE")){?>
                            <object type="application/x-shockwave-flash" data="<?php echo $this->staticUrl('index/index_banner.swf');?>" width="1920" height="470">
                            <!--<![endif]-->
                            <param name="quality" value="high" />
                            <param name="wmode" value="opaque" />
                            <param name="swfversion" value="15.0.0.0" />
                            <param name="expressinstall" value="Scripts/expressInstall.swf" />
                            <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
                            <div>
                                <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
                                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" width="112" height="33" /></a></p>
                            </div>
                            <!--[if !IE]>-->
                            </object>
                        <?php }?>
                        <!--<![endif]-->
                    </object>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="index_rowbg">
        <div class="scrollable-all" >
            <div class="scrollable" id="scrollable">
                <div class="items">
                    <ul class="video-lst-a">
                        <li class="li_width">
                            <?php if($is_mobile){?>
                            <a href="http://v.youku.com/v_show/id_XNjU5OTM4MDQ0.html" target="_blank" >
                            <?php }else{?>
                            <a id="vedio1" href="http://player.youku.com/player.php/sid/XNjU5OTM4MDQ0/v.swf">
                            <?php }?>
                            <img class="q" src="<?php echo $this->staticUrl('index/001.jpg'); ?>" alt="更有竞争力的操作系统"/></a>
                        </li>
                        <li >
                            <img class="q" src="<?php echo $this->staticUrl('index/index_divide_pic.jpg'); ?>" />
                        </li>
                        <li class="li_width">
                            <a id="vedio2" href="<?php echo $this->createUrl('device/index'); ?>" ><img class="q" src="<?php echo $this->staticUrl('index/002.jpg'); ?>" /></a>
                        </li>
                        <li >
                            <img class="q" src="<?php echo $this->staticUrl('index/index_divide_pic.jpg'); ?>" />
                        </li>
                        <li class="li_width last-col">
                            <a id="vedio3" href="<?php echo $this->createUrl('device/stb'); ?>" ><img class="q" src="<?php echo $this->staticUrl('index/003.jpg'); ?>" /></a>
                        </li>
                   </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="<?php echo $this->staticUrl('fancybox2/jquery.fancybox.pack.js','js'); ?>"></script> 
<script>
$(document).ready(function() {
	
	$("a#vedio1").fancybox();
//    $("a#vedio2").fancybox();
//    $("a#vedio3").fancybox();

});
</script>