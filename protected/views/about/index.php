<style>
    .aboutIbg{
        font-size: 14px;
    }
    .about_row{
        width: 980px;
        margin: 0 auto;
        margin-top: 40px;
        overflow: hidden;
    }

    .abrow1_img{
        width: 190px;
        height: 55px;
        margin: 60px auto 30px auto;
        background: url(/images/about/about1.png) no-repeat;
        overflow: hidden;
    }
    .abrow1_imgposi1{
        background-position: 0px 0px;
    }
    .abrow1_imgposi2{
        background-position: -196px 0px;
    }
    .abrow1_imgposi3{
        background-position: -396px 0px;
    }
    .hor_line{
        height: 1px;
        width: 100%;
        margin: 35px auto 40px auto;
        background-color: #ECE9E9;
    }
    .abrow2_img{
        width: 220px;
        height: 90px;
        background: url(/images/about/about_new1.png) no-repeat;
        overflow: hidden;
    }
    .abrow2_imgposi1{
        background-position: 0px 12px;
    }

    .about_rowblock1{
        width: 250px;
        display: inline-block
    }
    .about_rowblock2{
        width: 725px;
        display: inline-block
    }
    .space_line{
        width: 100%;
        height: 10px;
    }
    .text_indent{
        text-indent: 25px;
    }
</style>

<div class="aboutIbg">
    
    
    <div class="about_row">
        <div class="about_rowblock1">
            <div class="abrow2_img abrow2_imgposi1"></div>
        </div>
        <div class="about_rowblock2">
            <div class="text_indent">上海联彤网络通讯技术有限公司（简称联彤）成立于2012年3月，是由中科院联合国内研发和产业力量组成的高科技企业。
            联彤采用“产、学、研、用”一体化的创新研究模式，全力打造跨终端、高性能、有安全保障的中国自主知识产权操作系统--China
            Operation System（简称COS）。COS为中国的手机、PAD、机顶盒、PC、智能家电等提供操作系统层面的支持，同时为中国用户提供更
            优秀的使用体验。</div><br/>
            
            <div class="text_indent">COS提供以应用商店、会员平台、支付平台、广告平台为核心的功能模块，上游支持并服务运营商产品及盈利模式，下游向生产商
            提供以COS为核心的整体解决方案，最终形成产业链，打造合作伙伴共同获益的生态系统。</div><br/>
            
            <div class="text_indent">2014年初，COS 1.0 正式发布，即得到东方有线等知名运营商的大力支持。新的市场机遇下，COS将与合作伙伴在终端设备、电信、
            广电与互联网通信领域继续耕耘，开发更丰富的内容，提供更完善的服务，协力共创多赢的市场局面。</div>

        </div>
    </div>
    
    <div class="hor_line"></div> <!-- 横线 -->
    
    <!-- 图片 -->
    <div class="about_row" style="margin-top: 50px;">
        <img src="<?php echo $this->staticUrl('about/about3.jpg');?>" />
    </div>
    <div class="space_line"></div>
    <div class="about_row">
        <img src="<?php echo $this->staticUrl('about/about4.jpg');?>" />
    </div>
    <div class="about_row">
        <img src="<?php echo $this->staticUrl('about/about5.jpg');?>" />
    </div>
    <div class="space_line"></div>
    <div class="about_row">
        <img src="<?php echo $this->staticUrl('about/about6.jpg');?>" />
    </div>
</div>