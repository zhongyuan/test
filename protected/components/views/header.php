<?php

$session = Yii::app()->session;

?>

<div style="" id="headernew">
    <div class="logo" >
        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><span class="logo_jpg"></span></a>
    </div>
    <div  class="list">
        <ul >
            <li class="font_1"><a class="<?php echo $control == 'site'?'currentItem font_color_main':'not_current';?>" href="<?php echo Yii::app()->createUrl('site/index'); ?>">首页</a></li>
            <li class="font_1"><a class="<?php echo $control == 'introduce'?'currentItem font_color_main':'not_current';?>" href="<?php echo Yii::app()->createUrl('introduce/index'); ?>">COS介绍</a></li>
            <li class="font_1"><a class="<?php echo $control == 'device'?'currentItem font_color_main':'not_current';?>" href="<?php echo Yii::app()->createUrl('device/index'); ?>">COS设备</a></li>
            <li class="font_1"><a class="<?php echo $control == 'news'?'currentItem font_color_main':'not_current';?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">最新消息</a></li>
            <li class="font_1"><a class="<?php echo $control == 'developer'?'currentItem font_color_main':'not_current';?>" href="<?php echo Yii::app()->createUrl('developer/index'); ?>">开发者</a></li>
            <li class="font_1"><a class="<?php echo $control == 'partner'?'currentItem font_color_main':'not_current';?>" href="<?php echo Yii::app()->createUrl('partner/index'); ?>">合作伙伴</a></li>
            <li class="font_1"><a class="<?php echo $control == 'about'?'currentItem font_color_main':'not_current';?>" href="<?php echo Yii::app()->createUrl('about/index'); ?>">关于COS</a></li>
        </ul>
    </div>
    <div class ="search">
        <div class="alin_right">
            <?php if(!$session['user_id']){ ?>
            <ul class="header_login">
            <li class="global_f font_2"><a href="<?php echo Yii::app()->createUrl('site/register'); ?>">
                <span class="register_logo" ></span><?php echo Yii::t('main','register');?>
                </a></li>
            <li class="global_f font_2"><a href="<?php echo Yii::app()->createUrl('site/login'); ?>">
                <span class="login_logo" ></span><?php echo Yii::t('main','login');?></a></li>
            <?php }else{?>
            <ul class="header_logout">
                <li><?php if(strlen($session['user_name']) > 23) {echo substr($session['user_name'], 0, 23).'..';}else{echo $session['user_name'];} ?></li>
            <li><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">
                <span class="loginout_logo" ></span>
                    <?php echo Yii::t('main','logout');?>
                </a></li>
            <?php }?>
            <!--<li class="global_f"><?php echo Yii::t('main','en_cn');?></li>-->
        </ul>
        </div>
        <div class="search_inform">
            <input class="input_form" type="text"  name="keywords" id="keywords" maxlength=30 />
            <a href="#_self"><span id="submit_search" ></span></a>
        </div>
    </div>



</div>

<!--//======二级目录=========== -->
<?php if(in_array($control, $controls)){ ?>
    <div class ="second_nav" >
        <div class="width_center">
            <div id="triangle-up" style="left: <?php if($control=='introduce'){echo '268px';}elseif($control=='news'){echo '440px';}elseif($control=='device'){echo '355px';}
            elseif($control=='developer'){echo '518px';}elseif($control=='partner'){echo '595px';}elseif($control=='about'){echo '680px';} ?>;">
                    <i></i>
            </div>
            <div id="second_content">
                    <?php if($control=='introduce'){?>
                    <ul style="margin-left: 105px;">
                        <li><a class="<?php echo $action=='ind'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('introduce/index'); ?>">完美兼容</a></li>
                        <li><a class="<?php echo $action=='out'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('introduce/outstanding'); ?>">出色的性能表现</a></li>
                        <li><a class="<?php echo $action=='saf'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('introduce/safety'); ?>">安全可靠</a></li>
                    <?php }elseif($control=='news'){ ?>
                    <ul style="margin-left: 275px;">
                        <li><a class="<?php echo $action=='ind'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>"><?php echo Yii::t('news','latest_news');?></a></li>
                        <li><a class="<?php echo $action=='dev'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('news/devIndex'); ?>"><?php echo Yii::t('news','dev_meetings');?></a></li>
                        <li><a class="<?php echo $action=='app'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('news/appIndex'); ?>"><?php echo Yii::t('news','app_dev_race');?></a></li>
                        <li><a class="<?php echo $action=='ver'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('news/version'); ?>"><?php echo Yii::t('news','version_info');?></a></li>
                    <?php }elseif($control=='device'){?>
                    <ul style="margin-left: 245px;">
                        <li><a class="<?php echo $action=='ind'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('device/index'); ?>">智能手机与平板电脑</a></li>
                        <li><a class="<?php echo $action=='stb'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('device/stb'); ?>">智能电视机顶盒</a></li>
                    <?php }elseif($control=='developer'){?>
                    <ul style="margin-left: 338px;">
                        <li><a class="<?php echo $action=='ind'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('developer/index'); ?>">培训</a></li>
                        <li><a class="<?php echo $action=='gui'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('developer/guide'); ?>">开发者指引</a></li>
                        <li><a class="<?php echo $action=='ref'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('developer/reference'); ?>">API参考</a></li>
                        <li><a class="<?php echo $action=='dce'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('developer/dcenter'); ?>">下载中心</a></li>
                    <?php }elseif($control=='partner'){?>
                    <ul style="margin-left: 535px;">
                        <li><a class="<?php echo $action=='ind'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('partner/index'); ?>">产业链</a></li>
                        <li><a class="<?php echo $action=='eco'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('partner/ecology'); ?>">生态链</a></li>
                    <?php }elseif($control=='about'){?>
                    <ul style="margin-left: 610px;">
                        <li><a class="<?php echo $action=='ind'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('about/index'); ?>">关于联彤</a></li>
                        <li><a class="<?php echo $action=='con'?'selectItem font_color_main':null; ?>" href="<?php echo Yii::app()->createUrl('about/contact'); ?>">联系联彤</a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
<?php }?>

<!-- 回车绑定的代码 -->
<script language="javascript" type="text/javascript">
    $(function(){
        $('#submit_search').click(function(){
            search($('#keywords').val());
        });

        $('#keywords').bind('keypress',function(event){
            if(event.keyCode == "13")
            {
                search($('#keywords').val());
            }
        });
    });
    function search(key)
    {
        if(key.length<=0 || key.length>=30)
        {
            return false;
        }else{
            var url = "<?php echo Yii::app()->createUrl('site/search');?>"+"?key="+encodeURIComponent(key);
            window.location.href = url;
        }
    }
</script>
