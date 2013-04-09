<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<style>
    .register{
        padding: 0px 70px;
    }
    .register_ti p{
        font-size: 27px;
        padding: 23px 20px;
    }
    .register_con{
        height: 700px;
        width: 100%;
        padding-bottom: 40px;
    }
    .register_left{
        width: 250px;
        height:100%;
        border-radius: 7px;
        display: inline-block;
        background-color: #e7e7e7;
    }
    .register_rig{
        width:700px;
        height:100%;
        margin-left: -3px;
        border-radius: 7px;
        display: inline-block;
        background-color: #fafafa;
    }

    .register_cos{
        padding: 20px 20px;
        font-size: 14px;
        color: #666666;
    }
    .register_cos span{
        font-size: 22px;
        display: block;
        color: #323232;
    }
    .register_info{
        margin: 0 auto;
        width: 400px;
        font-size: 14px;
    }
    .register_info input{
        width: 270px;
        height: 23px;
        border-radius: 7px;
        margin-left: 40px;
        overflow: hidden;
    }
    .remark{
        display:block;
        margin-left: 105px;
        padding-top: 10px;
        padding-bottom: 20px;
        color: #768db9;
    }
    .register_item p{
        height: 29px;
        display: inline-block;
    }
    .register_key{
        width: 80px;
        text-align: right;
    }
    .register_item{
        margin:10px 0;
    }
    .pw_str{
        display:block;
        margin-left: 125px;
        color: #768db9;
    }

    #prograss{

    }

#loadbar{
    display: inline-block;
    height: 13px;
    width: 100px;
    background-color:white;
    border:1px solid #000;
}
#bar{
    display: block;
    height: 15px;
    background-color:red;

}
.pw_strong{

}
</style>

<div class="register">
    <div class="register_ti">
        <p>我的COS</p>
    </div>
    <div class="register_con">
        <div class="register_left">
            <p class="register_cos"><span>建立一个COSID</span>你的COS ID可以让你轻松使用COS的所有服务，包括COS Store、COS Online Store、C-Life等。除
                非经过你的授权，我们不会将你的资料分享给他人。</p>
            <p><a style="color:#6666ff"> 阅读COS 客户隐私权政策</a></p>
        </div>
        <div class="register_rig">

            <p class="register_cos"><span>COS ID</span>你的COS ID可以让你轻松使用COS的所有服务，包括COS Store、COS Online Store、C-Life等。除
                非经过你的授权，我们不会将你的资料分享给他人。</p>

            <div class="register_info">

                <div class="register_item">
                    <p class="register_key"><span style="">COS ID</span></p>
                    <p><input type="text" name="cos_id" /></p>
                </div>
                <div class="register_item">
                    <p class="register_key"><span style="">密码</span></p>
                    <p><input type="text" name="cos_id" /></p>

<!--                    <div class="pw_str"><span>密码强度：</span> <strong id="prograss"></strong> <div>-->


                </div>

                <div  class="register_item" >
                    <p class="pw_strong">密码强度：</p>
                    <p  id="loadbar"><span id="bar" style="width:30%"></span></p>

                </div>

                <div class="register_item">
                    <p class="register_key"><span style="">确认密码</span></p>
                    <p><input type="text" name="cos_id" /></p>
                    <p></p>
                </div>


            </div>




            <div class="register_button">
                <div ><span class="button1">取消</span></div>
                <div ><span class="button1 select">登陆</span></div>
                <!--<a class="button"><span>登陆</span></a>-->
            </div>
        </div>
    </div>
</div>

<style>
    .register_button{
        text-align: center;
        color:#323232;
    }
    .register_button div{
        margin: 20px 30px;
        width: 130px;
        height: 35px;
        display: inline-block;
        border-radius: 10px;
        border:5px solid #f2f2f2;


    }
    .button1{
        position: relative;
        top: 2px;
        padding: 5px 44px;
        font-size: 20px;
        background-color: #fafafa;/*eb8313*/   /* 登陆头标颜色 ed9d22    外边环的颜色f2f2f2     border-bottom:c3c3c3*/
        border: 1px solid rgba(170, 169, 169, 0.9);
        border-radius: 7px;

    }

    .select{
        color:white;
        background-color: #eb8313;
    }

/*
a.button {
      font: normal 12px sans-serif;
      text-decoration: none;
    }
.button {
      width:149px;
      height: 48px;
      background: url('/images/register_rigister/selected_button.jpg') no-repeat;

    }*/

</style>

<object type="application/x-shockwave-flash" data="/qzone/space_item/orig/14/88814_s.swf" width="870px" height="230"
        style="display: block; width: 870px; height: 230px; margin-left: -16px;" align="middle">
    <param name="movie" value="/qzone/space_item/orig/14/88814_s.swf">
    <param name="quality" value="high">
    <param name="bgcolor" value="#ffffff"><param name="play" value="true">
    <param name="loop" value="true"><param name="wmode" value="transparent"></object>