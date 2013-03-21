<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



?>
<div style="padding: 0 71px; ;float: left;" id="headernew">
    <div class="logo">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index/logo.jpg"/>
    </div>
    <div style ='margin-left:15px' class="list">
        <ul>
            <li >COS介绍</li>
            <li >最新消息</li>
            <li >浏览COS设备</li>
            <li >COS开发者</li>
            <li >COS商店</li>
        </ul>
    </div>
    <div class ="search">
        <ul>
            <li><img src="" />注册</li>
            <li><img src="" />登录</li>
            <li>English/中文</li>
        </ul>
        <input type="text" name="keywords" id="keywords" maxlength=30 />
    </div>

</div>

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