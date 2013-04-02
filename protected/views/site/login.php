<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<style>
    .login{
        padding: 0px 70px;
    }
    .login_ti p{
        font-size: 27px;
        padding: 23px 20px;
    }
    .login_con{
        height: 380px;
        width: 100%;
        padding-bottom: 40px;
    }
    .login_left{
        width: 250px;
        height:100%;
        border-radius: 7px;
        display: inline-block;
        background-color: #e7e7e7;
    }
    .login_rig{
        width:700px;
        height:100%;
        margin-left: -3px;
        border-radius: 7px;
        display: inline-block;
        background-color: #fafafa;
    }

    .login_cos{
        padding: 20px 20px;
        font-size: 14px;
        color: #666666;
    }
    .login_cos span{
        font-size: 22px;
        display: block;
        color: #323232;
    }
    .login_input{
        margin: 0 auto;
        width: 400px;
        font-size: 14px;
    }
    .login_input input{
        width: 300px;
        height: 30px;
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

/*    .login_button{
        text-align: center;
    }
    .login_button input{
        width:50px;
        height: 20px;

    }*/

</style>

<div class="login">
    <div class="login_ti">
        <p>我的COS</p>
    </div>
    <div class="login_con">
        <div class="login_left">
            <p class="login_cos"><span>登陆并管理你的COSID</span>想要登陆并管理你的COS ID 并使用我们的各项服务，首先你要拥有一个我们的ID，如果你还没有，
                那么现在你可以<a style="color:#6666ff">建立一个新的COS ID</a></p>
        </div>
        <div class="login_rig">

            <p class="login_cos"><span>登陆COS</span>请输入您的账号和密码，如果忘记了请点击下方提示性文字。</p>

            <div class="login_input">
                <p>
                    <span style="">COS ID</span>
                    <input type="text" name="cos_id" />
                    <span class="remark" >忘记你的COS ID了?</span>
                </p>
                <p>
                    <span style="margin-left: 20px;">密码</span>
                    <input type="password" name="psw" />
                    <span class="remark">忘记你的COS密码了?</span>
                </p>
            </div>

            <div class="login_button">
                <div ><span class="button1">取消</span></div>
                <div ><span class="button1 select">登陆</span></div>
                <!--<a class="button"><span>登陆</span></a>-->
            </div>
        </div>
    </div>
</div>

<style>
    .login_button{
        text-align: center;
        color:#323232;
    }
    .login_button div{
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
      background: url('/cos/images/login_rigister/selected_button.jpg') no-repeat;

    }*/

</style>