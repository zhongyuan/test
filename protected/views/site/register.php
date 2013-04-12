<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/siteRegister.css"  />
<script language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/siteRegister.js"></script>

<div class="register">
    <div class="register_ti">
        <p>我的COS</p>
    </div>
    <div class="register_con">
        <div class="register_left">
			<div class="rleft_box">
				<h2>建立一个COS ID</h2>
				<p>
					您的COS ID可以让你轻松使用COS的所有服务，包括COS Store、COS Online Store、C-Life等。除非经过你的授权，我们不会将你的资料分享给他人。
				</p>
	            <p class="rleft_privacy"><a href="#"> 阅读COS 客户隐私权政策 ◆</a></p>	
			</div>
			
        </div>
        <div class="register_rig">
			
			
			
			<!--表单区域开始处-->
			<?php
				echo CHtml::beginForm('','post',array('id'=>"registerForm"));
				$form=$this->beginWidget('CActiveForm');
				echo $form->errorSummary($model);
			?>
			
			<div class="site_reg">
				<h2>COS ID</h2>
				<p class="site_reg_comment">你的COS ID可以让你轻松使用COS的所有服务，包括COS Store、COS Online Store、C-Life等。除非经过你的授权，
				<br />我们不会将你的资料分享给他人。
				</p>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'user_name',array('label'=>"COS ID")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'user_name'); ?><span id="user_name_tips">*</span></li>
						
				</ul>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'passwd',array('label'=>"密码")); ?></li>
					<li class="inputbox"><?php echo $form->passwordField($model,'passwd') ?><span id="passwd_tips">*</span></li>
				</ul>
				<ul class="site_reg_items">
					<li class="lbl">&nbsp;</li>
					<li class="inputbox">密码强度：</li>
				</ul>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'passwd2',array('label'=>"确认密码")); ?></li>
					<li class="inputbox"><?php echo $form->passwordField($model,'passwd2') ?><span id="passwd2_tips">*</span></li>
				</ul>
				
					
					
				
				<h2>设定安全提示问题</h2>
				<p class="site_reg_comment">请选择或自定一个安全问题。当您忘记密码时，此安全问题可以帮助您快速地找到密码，并确认您的身份。</p>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'question_id',array('label'=>"安全提示问题")); ?></li>
					<li class="inputbox"><?php echo $form->dropDownList($model,'question_id',$extConfig['safeQuestions']);?></li>
					
				</ul>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'answer',array('label'=>"答案")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'answer'); ?></li>
				</ul>
				
				
				<h2>选择您的出生日期</h2>
				<p class="site_reg_comment">连同您设定的安全提示问题，此资讯可在您忘记密码或需要重设密码时帮助我们识别您的身份。</p>
				<ul class="site_reg_items">
					<li class="lbl">&nbsp;</li>
					<li class="inputbox">
						<?php echo $form->dropDownList($model,'year',$extConfig['years'],array('class'=>'year'));?>
						<?php echo $form->dropDownList($model,'month',$extConfig['months'],array('class'=>'year'));?>
						<?php echo $form->dropDownList($model,'day',$extConfig['days'],array('class'=>'year'));?>
					</li>	
				</ul>
				
				
				
				<h2>输入您的姓名</h2>
				<p class="site_reg_comment">请输入您的完整姓名。</p>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'first_name',array('label'=>"姓氏")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'first_name'); ?><span id="first_name_tips">*</span></li>
				</ul>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'last_name',array('label'=>"名字")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'last_name'); ?><span id="last_name_tips">*</span></li>
				</ul>
				
				<h2>输入您的主要联系地址</h2>
				<p class="site_reg_comment">请输入您的邮寄地址。</p>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'country',array('label'=>"国家或地区")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'country'); ?></li>	
				</ul>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'company',array('label'=>"公司/机构")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'company'); ?></li>
				</ul>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'address',array('label'=>"地址")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'address'); ?></li>
				</ul>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'county',array('label'=>"县/市")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'county'); ?></li>
				</ul>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'state',array('label'=>"州/省")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'state'); ?></li>
				</ul>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'zip_code',array('label'=>"邮递区号")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'zip_code'); ?></li>
				</ul>
				
				
				<h2>选择您最常用的语言</h2>
				<p class="site_reg_comment">请选择您最擅长使用语种。</p>
				<ul class="site_reg_items">
					<li class="lbl"><?php echo $form->label($model,'language',array('label'=>"偏好的语言")); ?></li>
					<li class="inputbox"><?php echo $form->textField($model,'language'); ?></li>
				</ul>
				
				
				<h2>联系方式偏好</h2>
				<p class="site_reg_comment">获知App新闻 软件更新以及有关产品与服务的最新资讯。请注意：电子邮件讯息是采用您居住国家的官方语言。</p>
				<p class="site_reg_comment"><a href="#">阅读COS客户隐私权政策</a></p>
				<div class="form_ext_box">
					<h3>来自COS的讯息</h3>
					<p class="more"><?php echo $form->checkBox($model,'viaEmail'); ?>电子邮件</p>
					<p class="more">COS新闻 软体与更多内容。</p>
					<h3>电子报</h3>
					<p><?php echo $form->checkBox($model,'viaEPaper'); ?>COS商城与C - life的实时更新</p>
					<p>COS每周都会推出很多新内容，想要第一时间得到这些讯息请打勾。</p>	
				</div>
				
				
				
				<h2>输入看到的符号</h2>
				<div class="form_ext_box">
					<div class="captcha"><?php $this->widget('CCaptcha',array('buttonLabel'=>"",'imageOptions'=>array('width'=>160,'maxLength'=>4))); ?></div>
					<div class="cap_inputbox"><?php echo $form->textField($model,'verifyCode'); ?> (字母不区分大小写)<span id="verifyCode_tips">*</span></div>
					<p><?php echo $form->checkBox($model,'isRead',array('checked'=>'checked')); ?> 我已阅读并同意COS服务条款与COS客户隐私政策</p>	
				</div>
				
			</div>
			

            <div class="register_button">
                <div ><span class="button1" id="cancel_btn">取消</span></div>
                <div ><span class="button1 select" id="submit_btn">注册</span></div>
            </div>
			
			<?php
				$this->endWidget();
				echo CHtml::endForm();
			?>
			<!--表单区域结束处-->
        </div>
    </div>
</div>

<!--<object type="application/x-shockwave-flash" data="/qzone/space_item/orig/14/88814_s.swf" width="870px" height="230"
        style="display: block; width: 870px; height: 230px; margin-left: -16px;" align="middle">
    <param name="movie" value="/qzone/space_item/orig/14/88814_s.swf">
    <param name="quality" value="high">
    <param name="bgcolor" value="#ffffff"><param name="play" value="true">
    <param name="loop" value="true"><param name="wmode" value="transparent"></object>-->