<style>
    .dcenter_center{
        width: 980px;
        margin: 30px auto;
        font-size: 14px;
    }
    .div_height1{
        height: 301px;
    }
    .yellow_divide_line{
        width: 5px;
        height: 15px;
        background-color: rgb(236, 154, 66);
        margin-top: 5px;
    }
    .inline_block{
        display: inline-block;
    }
    .deve_tools{
        width: 430px;
        height: 500px;

    }
    .middle_img{
        width: 31px;
        height: 477px;
        margin: 0 30px 0 50px;
    }
    .deve_source{
        width: 430px;
        height: 500px;
    }
    .dcenter_title{
        font-size: 18px;
        margin-left: 8px;
    }
    .dcen_margin{
        margin: 15px auto;
    }
    .dcen_margin img{
        display: block;
        margin: 30px auto 0px auto;
    }
    .text_center{
        text-align: center;
    }
    .dcen_line_height{
        line-height: 30px;
    }
    .dcen_right_margin{
        margin: 25px auto;
    }
    .dcen_right_margin div{
        margin: 10px auto;
    }
    .dcen_second_title{
        color: #3AC4F0;
        font-size: 16px;
    }
    .dcen_img_block{
        width: 234px;
        margin: 0 auto;
    }
</style>

<div class="dcenter_bg">

    <div class="dd div_height1">
        <div class="mm">
            <div class="ff">
                <img src="<?php echo $this->staticUrl('developer/download_1.jpg'); ?>">
            </div>
        </div>
    </div>
    
    
    <div class='dcenter_center'>
        <div class="deve_tools inline_block">
            <div class='yellow_divide_line inline_block'></div>
            <div class='dcenter_title inline_block'>开发工具</div>
            <div class='dcen_margin dcen_line_height'>
                COS SDK提供了你需要建立的API库和开发工具，以及调试COS的应用程序。如果你是一个新的COS开发者，
                我们建议您下载的ADT包开发应用程序快速启动。它包括必要的COS SDK组件和版本的Eclips IDE内置ADT
                (COS开发工具)，以简化您的COS应用程序的开发。
            </div>
            <div class='dcen_margin'>
                <img src='<?php echo $this->staticUrl('developer/download_5.jpg'); ?>' />
                <div class="dcen_img_block">
                <a href="<?php echo $this->createUrl('developer/docVersions'); ?>"><img src='<?php echo $this->staticUrl('developer/download_6.jpg'); ?>' /></a>
                </div>
            </div>
            <div class='text_center'>
                版本：v1.0正式版 大小：549MB <br/>
                系统：XP/Vista/Win7/Win8  更新:2013-02-25
            </div>
        </div>
        
        
        <div class='middle_img inline_block'><img src="<?php echo $this->staticUrl('developer/download_3.jpg'); ?>" /></div>
        
        
        <div class="deve_source inline_block">
            <div class='yellow_divide_line inline_block'></div>
            <div class='dcenter_title inline_block'>源代码</div>
            <div class='dcen_margin dcen_line_height'>
                为了帮助您了解一些基本的COS API和编码的做法，各种示例代码可用于COS SDK管理器。每一个版本的COS平台
                提供的SDK管理器提供了自己的一套示例应用程序。
            </div>
            <div class="dcen_right_margin">
                <div class="dcen_second_title">智能菜单 Demo1.1.0</div>
                <div>COS 智能菜单 Demo，包括示例代码以及APK。</div>
            </div>
            
            <div class="dcen_right_margin">
                <div class="dcen_second_title">应用内部打开APP store Demo</div>
                <div>如何在自己的一个应用中推荐自己的其他应用呢？</div>
            </div>
            
            <div class="dcen_right_margin">
                <div class="dcen_second_title">API Demo</div>
                <div>供开发者参考学习API的使用</div>
            </div>
            <div class="dcen_right_margin">
                <div class="dcen_second_title">应用内部打开APP store Demo</div>
                <div>如何能在自己的应用中打开其他应用的详情界面呢？</div>
            </div>
        </div>
    </div>

</div>