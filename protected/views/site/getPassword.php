<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
/*$this->breadcrumbs=array(
	'找回密码',
);*/
?>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.form.js" type="text/javascript"></script>
<style type="text/css">
	h1{
		font-size: 22px;
		margin: 30px 0px;
	}
	#stf_form{
		height: 350px;
		padding-top: 50px;
	}
	input.midle{
		width: 300px;
		height: 26px;
		line-height: 10px;
		border-radius: 4px;
		border: 1px solid #ccc;
		outline: none;
	}
	input.sbt{
		width: 100px;
		height: 32px;
		line-height: 10px;
		border-radius: 4px;
		border: 1px solid #ccc;
		outline: none;
		font-size: 16px;
		background:#ccc;
	}
	
	/**********遮罩效果CSS及JS样例***************/
	
	.bg_halfop{
		display: none;
		position: fixed;
		width: 100%;
		height: 100%;
		background: #000;
		z-index: 200;
		top: 0;
		left: 0;
		opacity: 0.7;
	}
	.content_loading{
		display: none;
		position: fixed;
		top: 50%;
		z-index: 201;
		left: 50%;
	}
</style>
<h1><a href="/">首页</a> / 忘记密码</h1>
<p>在以下输入框内填写您的邮箱地址,以便我们将重置后的新密码发往此邮箱</p>
<hr />
<p>&nbsp;</p>

<div class="form">
<form name="form1" method="POST" action="<?php echo $this->createUrl('site/getPassword');?>" id="stf_form">
	<input type="text" name="email" value="" class="midle"/>
	<input type="submit" name="sbt" value="找回密码" id="sbt" class="sbt"/>
</form>
</div><!-- form -->


<!-- 遮罩效果 -->
<div class='bg_halfop' style="display:none;"></div>
<div class='content_loading' style="display:none;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/loading.gif"/></div>

<script language="javascript">
	$(document).ready(function(){
		
		$("#sbt").click(function(){
			var regEmail = /^[0-9a-zA-Z_\-\.]+@[0-9a-zA-Z_\-]+(\.[0-9a-zA-Z_\-]+)*$/;
			var email = $("input[name=email]").val();
			if(!regEmail.test(email)){
				alert("邮箱格式不正确!");
				return false;
			}
			
			//显示加载信息
			$('.bg_halfop').css('display','block');
        	$('.content_loading').css('display','block');//3.显示
			
			$("#stf_form").ajaxForm({
				dataType : 'json',
				success : function(data){
					alert(data.msg);
					if(data.req == "ok"){
						window.location.href = "<?php echo $this->createUrl('admin/staffInfo')?>";
					}
					
					//隐藏加载信息
					$('.bg_halfop').css('display','none');
        			$('.content_loading').css('display','none');//4.隐藏
					
					
				} 
			});
			
			
		});
		
	});
</script>
