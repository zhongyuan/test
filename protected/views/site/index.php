<style>
    .div_height1{
        height: 470px;
    }
    .index_rowbg{
        width: 100%;
        height: 315px;
        background: url(/images/index/index_pic_bg.jpg) repeat left top;
    }
    .img_width{
        width: 315px;
    }
    .index_row{
        width: 980px;
        margin: 0px auto;
        overflow: hidden;
        
    }
    .index_pic{
        display: inline-block;
    }
    .mar 
</style>
<!--Loading Fancybox files-->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/fancybox2/jquery.fancybox.css"  />

<div class="indexbg">
    <div class="dd div_height1">
        <div class="mm">
            <div class="ff">
                <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1920" height="470">
                    <param name="movie" value="<?php echo $this->staticUrl('index/index_banner.swf');?>" />
                    <param name="quality" value="high" />
                    <param name="wmode" value="opaque" />
                    <param name="swfversion" value="15.0.0.0" />
                    <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                    <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
                    <!--[if !IE] 比如google safari-->
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
                    <!--<![endif]-->
                </object>
            </div>
        </div>
    </div>
    
    <div class="index_rowbg">
        <div class="index_row">
            <div class="index_pic">
                <a id="vedio1" href="http://static.video.qq.com/TPout.swf?vid=u0122fwg9r0&auto=0"><img class="img_width" src="<?php echo $this->staticUrl('index/index1.jpg'); ?>" /></a>
            </div>
            <div class="index_pic">
                <img src="<?php echo $this->staticUrl('index/index_divide_line.jpg'); ?>" />
            </div>
            <div class="index_pic ">
                <a id="vedio2" href="http://static.video.qq.com/TPout.swf?vid=j0013fx6nie&auto=0"><img class="img_width" src="<?php echo $this->staticUrl('index/index2.jpg'); ?>" /></a>
            </div>
            <div class="index_pic">
                <img src="<?php echo $this->staticUrl('index/index_divide_line.jpg'); ?>" />
            </div>
            <div class="index_pic">
                <a id="vedio3" href="http://static.video.qq.com/TPout.swf?vid=l0013b08vyx&auto=0"><img class="img_width" src="<?php echo $this->staticUrl('index/index3.jpg'); ?>" /></a>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/fancybox2/jquery.fancybox.pack.js"></script> 
<script>
$(document).ready(function() {
	
	$("a#vedio1").fancybox();
    $("a#vedio2").fancybox();
    $("a#vedio3").fancybox();

});
</script>