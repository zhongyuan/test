

<div style="" id="headernew">
    <div class="logo" >
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index/logo.jpg"/>
    </div>
    <div  class="list">
        <ul >
            <li ><a class="<?php echo $control == 'site'?'currentItem':'not_current';?>" href="<?php echo Yii::app()->createUrl('site/index'); ?>">COS介绍</a></li>
            <li ><a class="<?php echo $control == 'news'?'currentItem':'not_current';?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">最新消息</a></li>
            <li ><a class="<?php echo $control == 'tt'?'currentItem':'not_current';?>" href="<?php echo Yii::app()->createUrl('site/index'); ?>">浏览COS设备</a></li>
            <li ><a class="<?php echo $control == 'tt'?'currentItem':'not_current';?>" href="<?php echo Yii::app()->createUrl('site/index'); ?>">COS开发者</a></li>
            <li ><a class="<?php echo $control == 'tt'?'currentItem':'not_current';?>" href="<?php echo Yii::app()->createUrl('site/index'); ?>">COS商店</a></li>
        </ul>
    </div>
    <div class ="search">

            <?php if(Yii::app()->user->isGuest){ ?>
            <ul class="header_login">
            <li><a href="<?php echo Yii::app()->createUrl('site/register'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index/register.jpg" />注册</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('site/login'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index/login.jpg" />登陆</a></li>
            <?php }else{?>
            <ul class="header_logout">
            <li>你好，<?php echo substr(Yii::app()->user->getName(), 0, 5).'...'; ?></li>
            <li><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index/login.jpg" />退出</a></li>
            <?php }?>

            <li>English/中文</li>
        </ul>
        <div class="search_inform">
            <input class="input_form" type="text"  name="keywords" id="keywords" maxlength=30 />
            <img id="submit_search"  style="float: left;position: relative;left: 17px;top: 13px;"
                 src="<?php echo Yii::app()->request->baseUrl; ?>/images/index/search_icon.jpg" />
        </div>
    </div>



</div>

<!--//======二级目录=========== -->
<?php if(in_array($control, $controls)){ ?>
    <div class ="second_nav" >
        <div id="triangle-up" style="left: <?php if($control=='news'){echo '402px';}elseif($control=='device'){echo '510px';}elseif($control=='developer'){echo '620px';} ?>;">
                <i></i>
        </div>
        <div id="second_content">

                <?php if($control=='news'){ ?>
                <ul style="margin-left: 235px;">
                    <li><a class="<?php echo $action=='ind'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">最新消息</a></li>
                    <li><a class="<?php echo $action=='dev'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/devIndex'); ?>">开发者大会</a></li>
                    <li><a class="<?php echo $action=='app'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/appIndex'); ?>">应用开发大赛</a></li>
                    <li><a class="<?php echo $action=='ver'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/version'); ?>">版本信息</a></li>
                <?php }elseif($control=='device'){?>
                <ul style="margin-left: 358px;">
                    <li><a class="<?php echo $action=='ind'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">设备首页</a></li>
                    <li><a class="<?php echo $action=='dev'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/devIndex'); ?>">智能手机</a></li>
                    <li><a class="<?php echo $action=='app'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">平板电脑</a></li>
                    <li><a class="<?php echo $action=='ver'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">电视机顶盒</a></li>
                <?php }elseif($control=='developer'){?>
                <ul style="margin-left: 440px;">
                    <li><a class="<?php echo $action=='ind'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">开发指引</a></li>
                    <li><a class="<?php echo $action=='dev'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/devIndex'); ?>">下载</a></li>
                    <li><a class="<?php echo $action=='app'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">讨论区</a></li>
                    <li><a class="<?php echo $action=='ver'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">参与开发</a></li>
                    <li><a class="<?php echo $action=='ver'?'selectItem':null; ?>" href="<?php echo Yii::app()->createUrl('news/index'); ?>">常见问题</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
<?php }?>
<!-- 回车绑定的代码 -->
<!--<script language="javascript" type="text/javascript">
    $(function(){
        $('#dataInput').bind('keypress',function(event){
            if(event.keyCode == "13")
            {
                alert('你输入的内容为：' + $('#dataInput').val());
            }
        });
    });
</script>-->
