


<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css"  />


<div class="login_body">
    <div class="login_ti">
        <p>我的COS</p>
    </div>
    <div class="login_con">
        <div class="login_left">
            <p class="login_cos"><span>登陆并管理你的COSID</span>想要登陆并管理你的COS ID 并使用我们的各项服务，首先你要拥有一个我们的ID，如果你还没有，
                那么现在你可以<a style="color:#6666ff">建立一个新的COS ID</a></p>
        </div>
        <div class="login_rig">
            <form action="" method="post">
                <p class="login_cos"><span>登陆COS</span>请输入您的账号和密码，如果忘记了请点击下方提示性文字。</p>

                <div class="row">
						<table>
							<tr>
								<td class="lg_label">
									<span class="username_label">COS ID</span>
								</td>
								<td>
									<input type="text" id="cos_id" name="username" />
                        			<?php //echo $form->textField($model,'username',array('id'=>'cos_id')); ?>
                        			<span class="remark" ></span>
								</td>
							</tr>
						</table>
						<!--<span class="remark" >忘记你的COS ID了?</span>-->
                </div>

                <div class="row">
						<table>
							<tr>
								<td class="lg_label"><span class="pwd_label">密码</span></td>
								<td>
									<input type="password" name="password" id='pass_word' />
                        			<span class="remark"><a href="<?php echo $this->createUrl('site/getPassword');?>">忘记你的COS密码了?</a></span>
								</td>
							</tr>
						</table>
                        
                </div>
                <div class="login_error"><?php //echo $form->error($model,'username')?$form->error($model,'username'):$form->error($model,'password');?></div>



                <div class="login_button">
                    <div><input type="reset" class="button1" value="取消" id="reset"/></div>
                    <div><input type ="submit" class="button1 select" id="submit" value="登陆" /></div>
                    <!--<div><?php echo CHtml::submitButton('登陆',array('class'=>'button1 select','id'=>'submit')); ?></div>-->
                    <!--<a class="button"><span>登陆</span></a>    <span id="submit" class="button1 select">登陆</span>-->
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    $(function(){
        //点击取消
        $("#reset").click(function(){
			window.location.href = "/";
            /*$('#user_name').attr('value',null);
            $('#pass_word').attr('value',null);
            $(this).addClass('select');
            $("#submit").removeClass('select');*/
        });

        //点击登录
        $("#submit").click(function(){
            var user_name = $("#cos_id").val();
            var pass_word = $("#pass_word").val();
			if(!user_name)
            {
				
                $('.login_error').html('用户名不能为空！');
                return false;
            }
			if(!pass_word)
            {
                $('.login_error').html('密码不能为空！');
                return false;
            }
            //检查是否是邮件类型
            if(!checkEmail(user_name))
            {
                $('.login_error').html('请输入有效的E_mail！');
                return false;
            }

        });
    });

    function checkEmail(user_name)
    {
           //对电子邮件的验证
           //var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
		   var myreg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i;
           if(!myreg.test(user_name))
           {	
                return false;
           }else{
               return true;
           }
  
    }

</script>