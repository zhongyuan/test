<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<!--<span style="clear:both"></span>-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/easySlider1.5.js"></script>

<style>
    .morePlat{
        text-align: center;
        font-size: 30px;
    }
    .back{
        width: 100%;
        height: 194px;
        background: url("/images/index/plat.jpg") no-repeat;
    }
    .back span{
        display: inline-block;
        width: 220px;
        height: 50px;
        position: relative;
        top: 140px;
        font-size: 14px;
    }
    .intelliModel{
        width: 100%;
        height:259px;
        background: url('<?php echo $this->staticUrl('index/intelli.jpg'); ?>') no-repeat;
    }
    .intelli_item{
        position: relative;
        width: 150px;
    }
    .intelli_1{
        top:120px;
        left:130px;
    }
    .intelli_2{
        top: 50px;
        left: 330px;
    }
    .intelli_3{
        top: -95px;
        left: 650px;
    }
    .intelli_4{
        top: -152px;
        left: 820px;
    }
    .intelli_title{
        font-size: 18px;
        text-align: center;
    }
    .intelli_content{
        font-size: 12px;
        padding: 0 9px;
    }
    .word{
        display: inline-block;
    }
    .word_1{
        width: 350px;
        margin-left: 110px;
        vertical-align: top;
        margin-top: 30px;
    }
    .word_2{
        width: 200px;
        margin-left: 780px;
        padding-top: 50px;
        color: white;
    }
    .word_3{
        width: 350px;
        margin-left: 100px;
        vertical-align: top;
        margin-top: 30px;
    }
    .cloud{
        width:100%;
        height:320px ;
        background: url('<?php echo $this->staticUrl('index/cloud.jpg'); ?>') no-repeat ;
    }
    .browser{
        margin:30px 0px;
    }
    .word_content{
        font-size: 12px;
        margin-top: 22px;
    }
    .voic{
        margin-top: 150px;
    }

    /*图片滑动效果的地方 start*/

    /* image replacement */
        .graphic, #prevBtn, #nextBtn{
            margin:0;
            padding:0;
            display:block;
            overflow:hidden;
            text-indent:-8000px;
            }
    /* // image replacement */

/* Easy Slider */

    #slider{
        -moz-border-radius: 198px;
        -webkit-border-radius: 198px;
        border-radius: 198px;
        position:relative;
        overflow: hidden;
        top: 89px;
        left: 8px;
        /*z-index:-1;*/
        width: 369px;
        height: 369px;
    }
	#slider ul, #slider li{
		margin:0;
		padding:0;
		list-style:none;
		}
	#slider li{
		/*
			define width and height of list item (slide)
			entire slider area will adjust according to the parameters provided here
		*/
		width:369px;
		height:369px;
		overflow:hidden;
		}
	#prevBtn{
        display: block;
        width: 62px;
        height: 62px;
        position: absolute;
        left: 260px;
        top: 240px;
		}
	#nextBtn{
        display: block;
        width: 62px;
        height: 62px;
        position: absolute;
        top: 240px;
        right: 260px;
		}
	#prevBtn a, #nextBtn a{
        display: block;
        width: 62px;
        height: 62px;
        background: url("/images/index/anrow.jpg") no-repeat;
        background-position: -21px -38px;
		}
	#nextBtn a{
		background-position: -88px -38px;
		}

/* // Easy Slider */


    .imgslide{
        position: relative;
        width: 100%;
        height: 540px;
    }
    .horizebg{
        position: absolute;
        top: 240px;
        left: 0px;
        z-index: -1;
        width: 100%;
        height: 60px;
        background-color: #f8f8f8;
    }
    .phone{
        margin: 0 auto;
        width: 384px;
        height: 540px;
        background: url("/images/index/phone.png") no-repeat;
    }

    /*图片滑动效果的地方 end*/
</style>

<div>
    <img style="width: 100%;" src="<?php echo $this->staticUrl('index/cos.jpg'); ?>"/>

    <p class="morePlat">多平台 More Platform</p>
    <div class="back">
        <span style="left: 185px;">宏达国际电子股份有限公司是一和台湾著名的威盛电子是兄弟</span>
        <span style="left: 225px;">宏达国际电子股份有限公司是一和台湾著名的威盛电子是兄弟</span>
        <span style="left: 260px;">宏达国际电子股份有限公司是一和台湾著名的威盛电子是兄弟</span>

    </div>
    <div class="imgslide">
        <span class="horizebg"></span>
        <div class="phone">

            <!--<img style="" src="<?php echo $this->staticUrl('index/phone.jpg'); ?>"/>-->
            <div id="slider">
                <ul>
                    <li><a href="http://"><img src="<?php echo $this->staticUrl('index/circle2.jpg'); ?>" /></a></li>
                    <li><a href="http://"><img src="<?php echo $this->staticUrl('index/circle2.jpg'); ?>"  /></a></li>
                    <li><a href="http://"><img src="<?php echo $this->staticUrl('index/circle.jpg'); ?>" /></a></li>
                    <li><a href="http://"><img src="<?php echo $this->staticUrl('index/circle2.jpg'); ?>" /></a></li>
                </ul>
            </div>

        </div>
    </div>


    <div class="intelliModel">
            <div style='padding: 20px 390px;'><p style='font-size: 22px;text-align: center;'>智能模式</p>
                <p style="font-size: 16px;text-align: center;">Intelligent Model</p></div>

            <div class="intelli_item intelli_1"><p class="intelli_title">电视</p>
                <p class="intelli_content">电视不是一个好东西，哈哈哈哈哈哈哈，好开心呜呜呜呜呜呜呜呜哈哈哈哈哈</p></div>

            <div class="intelli_item intelli_2"><p class="intelli_title">笔记本/台式电脑</p>
                <p class="intelli_content">电视不是一个好东西，哈哈哈哈哈哈哈，好开心呜呜呜呜呜呜呜呜哈哈哈哈哈</p></div>

            <div class="intelli_item intelli_3"><p class="intelli_title">手机</p>
                <p class="intelli_content">电视不是一个好东西，哈哈哈哈哈哈哈，好开心呜呜呜呜呜呜呜呜哈哈哈哈哈</p></div>

            <div class="intelli_item intelli_4"><p class="intelli_title">平板电脑</p>
                <p class="intelli_content">电视不是一个好东西，哈哈哈哈哈哈哈，好开心呜呜呜呜呜呜呜呜哈哈哈哈哈</p></div>

    </div>


    <div class ="voic" >
        <div class="word word_1" >
            <p class="" style="font-size: 25px;">
                <span>VOS语音助理</span><br/><span style="line-height: 22px;">Speech Assistant</span>
            </p>
            <p class="word_content">
                我是一个好孩子，好孩子顶顶顶顶顶顶顶顶短短的短短的方法地方方法发方法人噶而噶而顶顶顶顶顶顶顶顶短短的顶顶顶顶的大法官很快乐快递费看过看了看看来。
            </p>
        </div>

        <img style="margin-left: 125px;"src="<?php echo $this->staticUrl('index/vos.jpg'); ?>"/>

    </div>

    <div class="cloud" >
        <div class="word word_2">
            <p style="font-size: 25px;">
                <span>多重云</span><br/><span >Multiple Cloud</span>
            </p>
            <p class="word_content">
                我是一个好孩子，好孩子顶顶顶顶顶顶顶顶短短的短短的方法地方方法发方法人噶而噶而顶顶顶顶顶顶顶顶短短的顶顶顶顶的大法官很快乐快递费看过看了看看来。
            </p>
        </div>
    </div>

    <div class ="browser" >
        <div class="word word_3" >
            <p style="font-size: 25px;">
                <span>浏览器</span><br/><span style="line-height: 22px;">Browser</span>
            </p>
            <p class="word_content">
                我是一个好孩子，好孩子顶顶顶顶的短短顶顶顶的短短的方法地方方法发方法人噶而噶而顶顶顶顶顶的短短的方法地方方法发方法人噶而噶而顶顶顶顶短短的短短的方法地方方法发方法人噶而噶而顶顶顶顶顶顶顶顶短短的顶顶顶顶的大法官很快乐快递费看过看了看看来。
            </p>
        </div>
            <img style="margin-left: 95px"src="<?php echo $this->staticUrl('index/browser.jpg'); ?>"/>

    </div>


</div>
<div title="返回顶部" id="goTop" style="display:none;">

</div>
<style>
#goTop {
    position: fixed;
    right: 120px;
    bottom: 80px;
    width: 35px;
    height: 35px;
    background-color: rgba(102, 153, 204, 0);
    cursor: pointer;
    background: url('/images/index/anrow.jpg');
    background-position: -32px 0px;

}
</style>
<script type="text/javascript">
	    function getId(Id) {
	        return document.getElementById(Id);
	    }
	    var goTop = getId("goTop");
	    window.onscroll = function () {
            if(document.documentElement.scrollTop > 10){
                alert(document.documentElement.scrollTop);
            }

	        if (document.documentElement.scrollTop + document.body.scrollTop > 350) {
	            goTop.style.display = "block";
	        } else {
	            goTop.style.display = "none";
	        }
	    }
	    goTop.onclick = function () {
	        var Timer = setInterval(GoTop, 10);
	        function GoTop() {
	            if (document.documentElement.scrollTop + document.body.scrollTop < 1) {
	                clearInterval(Timer);
	            } else {
	                document.documentElement.scrollTop /= 1.1;
	                document.body.scrollTop /= 1.1;
	            }
	        }
	    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#slider").easySlider({
            auto: true,
            continuous: true
        });
    });
</script>