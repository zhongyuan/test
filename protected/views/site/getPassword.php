<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
/*$this->breadcrumbs=array(
	'找回密码',
);*/
?>
<script src="<?php echo $this->staticUrl('jquery.form.js','js');?>" type="text/javascript"></script>
<style type="text/css">
	.gp{
		width: 940px;
		margin:10px auto;
		font-family: lucida sans,trebuchet MS,Tahoma,sans-serif,Roboto,monospace;
		font-size: 12px;
		border: 1px solid #ccc;
		border-radius: 5px;
		padding: 15px;
		padding-top: 0px;
		color: #747474;
		height: 350px;
	}
	h1{
		font-size: 16px;
		margin: 30px 0px;
		background: #ececec;
		line-height: 30px;
		padding: 3px;
	}
	.gp hr{
		border:1px solid #ccc;
	}
	#stf_form{
		height: 300px;
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
		border: 1px solid #eb8313;
		outline: none;
		font-size: 16px;
		background:#eb8313;
		color: #fff;
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
	div#error{
		color:#e95016;
	}
</style>
<div class="gp">
<h1>通过邮箱找回密码</h1>
<p>在以下输入框内填写您的邮箱地址,以便我们将重置后的新密码发往此邮箱</p>
<hr />
<p>&nbsp;</p>

<div class="form">
<form name="form1" method="POST" action="<?php echo $this->createUrl('site/getPassword');?>" id="stf_form">
	<input type="text" name="email" value="" class="midle"/>
	<input type="submit" name="sbt" value="找回密码" id="sbt" class="sbt"/>
	<div id="error"></div>
</form>
</div><!-- form -->


<!-- 遮罩效果 -->
<div class='bg_halfop' style="display:none;"></div>
<div class='content_loading' style="display:none;"><img src="<?php echo $this->staticUrl('loading.gif','css');?>"/></div>

</div>
<script language="javascript">
	$(document).ready(function(){
		
		$("#sbt").click(function(){
			var regEmail = /^[0-9a-zA-Z_\-\.]+@[0-9a-zA-Z_\-]+(\.[0-9a-zA-Z_\-]+)*$/;
			var email = $("input[name=email]").val();
			if(!regEmail.test(email)){
				$("#error").html("请输入一个有效的Email");
				return false;
			}
			$("#error").html("");
			
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
