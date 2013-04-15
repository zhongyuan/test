

<style>
    .app_bg{
        width: 1100px;
        height: 321px;
        color: white;
        background-image: url('/images/news/app/app.jpg');
    }
    .app_title{
        position: relative;
        width: 350px;
        height: 140px;
        left: 570px;
        top: 90px;
        font-size: 55px;
        font-weight: bolder;
        text-align: right;
        line-height: 52px;
    }
    .app_title span{
        font-size: 37px;
        font-family: ddd;
    }
    .app_nav{
        position: relative;
        width: 550px;
        height: 30px;
        left: 70px;
        top: 148px;
    }
    .app_nav span{
        padding: 7px 16px;
        margin: 0 5px;
    }

    .app_parti{
        position: relative;
        top: 103px;
        left: 810px;
        color: green;
        font-size: 25px;
    }
    .app_selected{
        background-color: #d46e00;
        border-radius: 8px;
    }
    .app_nav a{
        color: white;
    }
</style>

<!-- 样式命名规则 -->


    <div class="app_bg">
        <p class="app_title"><span>2013</span>COS<br/>应用开发大赛</p>
        <p class="app_nav">
            <a href="<?php echo Yii::app()->createUrl('news/appIndex'); ?>"><span class="<?php echo $action == 'appIndex'?'app_selected':null ?>">大赛介绍</span></a>
            <a href="<?php echo Yii::app()->createUrl('news/appDetail'); ?>"><span class="<?php echo $action == 'appDetail'?'app_selected':null ?>">参赛详情</span></a>
            <a href="<?php echo Yii::app()->createUrl('news/appPart'); ?>"><span class="<?php echo $action == 'appPart'?'app_selected':null ?>">报名参加</span></a>
            <a href="<?php echo Yii::app()->createUrl('news/appShow'); ?>"><span class="<?php echo $action == 'appShow'?'app_selected':null ?>">作品展示</span></a>
            <a href="<?php echo Yii::app()->createUrl('news/appWinner'); ?>"><span class="<?php echo $action == 'appWinner'?'app_selected':null ?>">获奖名单</span></a>

        </p>
        <p class="app_parti">我要参赛</p>
    </div>



