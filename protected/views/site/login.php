


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

            <p class="login_cos"><span>登陆COS</span>请输入您的账号和密码，如果忘记了请点击下方提示性文字。</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
                <div class="row">
                        <span style="">COS ID</span>
<!--                        <input type="text" id="cos_id" />-->
                        <?php echo $form->textField($model,'username'); ?>
                        <span class="remark" >忘记你的COS ID了?</span>
                </div>

                <div class="row">
                        <span style="margin-left: 20px;">密码</span>
                        <?php echo $form->passwordField($model,'password'); ?>
                        <span class="remark">忘记你的COS密码了?</span>
                </div>
                <?php echo $form->error($model,'username'); ?>

                <div class="login_button">


                    <div><input type="reset" class="button1" value="取消" id="reset"/></div>
                    <div><?php echo CHtml::submitButton('登陆',array('class'=>'button1 select','id'=>'submit')); ?></div>
                    <!--<a class="button"><span>登陆</span></a>    <span id="submit" class="button1 select">登陆</span>-->
                </div>


<?php $this->endWidget(); ?>
        </div>
    </div>
</div>

<script>
    $(function(){
        //点击取消
        $("#reset").click(function(){
            $(this).addClass('select');
            $("#submit").removeClass('select');
        });

        //点击登录
//        $("#submit").click(function(){
//            var cos_id = $("#cos_id").val();
//            var psw = $("#psw").val();
//
//            var url = "<?php $this->createUrl('site/login'); ?>";
//            var data = "cos_id="+encodeURIComponent(cos_id)+'&psw='+psw
//        });



    });




</script>