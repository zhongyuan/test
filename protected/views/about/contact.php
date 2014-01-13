<style>
    .contactbg{
        font-size: 14px;
        margin-bottom: 60px;
    }
    .imgbg{
        height: 444px;
        background-color: #fdfdfd;
    }
    .Icenter{
        width: 980px;
        margin: 0 auto;
        overflow: hidden;
    }
    .vertical_line{
        width: 1px;
        height: 449px;
    }
    .hor_line{
        height: 1px;
        width: 100%;
        margin-bottom: 40px;
        background-color: #ECE9E9;
    }
    .contact_row{
        width: 980px;
        margin: 0px auto 40px auto;
        /*font-size: 12px;*/
        overflow: hidden;
    }
    .contact_row_left{
        /*width: 240px;*/
        width: 290px;
        /*display: inline-block;*/
        float: left;
    }
    .contact_row_right{
        width: 680px;
        /*display: inline-block;*/
        float: left;
    }
    .contact_row_right li{
        /*width: 235px;*/
        width: 290px;
        /*display: inline-block;*/
        float: left;
    }
    .contact_rowimg{
        width: 170px;
        height: 60px;
        margin-top: 7px;
        background: url(/images/about/contact3.png) no-repeat;
        overflow: hidden;
    }
    .crowimg_posi1{
        background-position: 0px 0px;
    }
    .crowimg_posi2{
        background-position: -203px 0px;
    }
    .crowimg_posi3{
        background-position: -430px 0px;
    }
    .black_icon{
        display: inline-block;
        width: 20px;
        height: 20px;
        background: url(/images/about/contact3.png) no-repeat;
        overflow: hidden;
        background-position: -639px 6px;
    }
    .commerce_title{
        font-size: 17px;
        margin-bottom: 20px;
    }
    .row_margin{
        /*margin: auto 40px;*/
        margin-left: 40px;
        /*margin: auto 5px;*/
    }
    .float{
        float: left;
    }
    .margin_top{
        margin-top: 40px;
    }
</style>


<div class="contactbg">
    <div class="imgbg">
        <div class="Icenter">
            <img src="<?php echo $this->staticUrl('about/contact1.jpg');?>"  />
        </div>
    </div>
    <div class="hor_line"></div>
    
    <div class="contact_row">
        <div class="contact_row_left">
            <div class="contact_rowimg crowimg_posi1"></div>
        </div>
        <div class="contact_row_right">
            <ul>
                <li>
                    <div class="commerce_title"><span class="black_icon"></span><span>联彤公司</span></div>
                    <div>
                        021-58550898<br/>
                        上海市浦东新区博霞路11号
                    </div>
                </li>
                <li class="row_margin">
                    <div class="commerce_title"><span class="black_icon"></span><span>人才招聘</span></div>
                    <div>
                        Recruit@china-liantong.com
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="hor_line"></div>
    
    <div class="contact_row">
        <div class="contact_row_left">
            <div class="contact_rowimg crowimg_posi2"></div>
        </div>
        <div class="contact_row_right">
            <div class="float">
                <ul>
                    <li>
                        <div class="commerce_title"><span class="black_icon"></span><span>移动设备合作</span></div>
                        <div>
                            Mobile@china-liantong.com
                        </div>
                    </li>
                    <li class="row_margin">
                        <div class="commerce_title"><span class="black_icon"></span><span>智能机顶盒合作</span></div>
                        <div>
                            OTT@china-liantong.com
                        </div>
                    </li>

                </ul>
            </div>
            <div class="float margin_top">
                <ul>
                    <li>
                        <div class="commerce_title"><span class="black_icon"></span><span>应用合作(移动终端)</span></div>
                        <div>
                            MobileAPP@china-liantong.com
                        </div>
                    </li>
                    <li class="row_margin">
                        <div class="commerce_title"><span class="black_icon"></span><span>应用合作(电视及机顶盒)</span></div>
                        <div>
                            TVAPP@china-liantong.com
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="hor_line"></div>
    
    <div class="contact_row">
        <div class="contact_row_left">
            <div class="contact_rowimg crowimg_posi3"></div>
        </div>
        <div class="contact_row_right">
            <ul>
                <li>
                    <div class="commerce_title"><span class="black_icon"></span><span>媒体联系</span></div>
                    <div>
                        Marketing@china-liantong.com
                    </div>
                </li>
<!--                <li class="row_margin">
                    <div class="commerce_title"><span class="black_icon"></span><span>其他</span></div>
                    <div>
                        王先生<br/>
                        w3dd2@china-liantong.com<br/>
                        上海市浦东新区博霞路11号
                    </div>
                </li>-->
            </ul>
        </div>
    </div>
</div>