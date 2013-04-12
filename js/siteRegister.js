$(document).ready(function(){

	$("#RegisterForm_user_name").bind("focus",function(){
		checkUsername();
	}).bind("blur",function(){
		checkUsername();
	});

	$("#RegisterForm_passwd").bind("focus",function(){
		checkPassword();
	}).bind("blur",function(){
		checkPassword();
	});

	$("#RegisterForm_passwd2").bind("focus",function(){
		checkMatchPasswd();
	}).bind("blur",function(){
		checkMatchPasswd();
	});

	$("#RegisterForm_first_name").bind("focus",function(){
		checkFirstname();
	}).bind("blur",function(){
		checkFirstname();
	});

	$("#RegisterForm_last_name").bind("focus",function(){
		checkLastname();
	}).bind("blur",function(){
		checkLastname();
	});




//	$("#RegisterForm_verifyCode").bind("focus",function(){
//		checkCaptcha();
//	}).bind("blur",function(){
//		checkCaptcha();
//	});




	$("#submit_btn").bind("click",function(){
		if(checkUsername() && checkPassword() && checkMatchPasswd() && checkFirstname() && checkLastname() && checkCaptcha()){
			$("#registerForm").submit();
			return true;
		}
		return false;
	});

	$("#cancel_btn").click(function(){
		return false;
	});

});


function checkUsername()
{
	var regUsername=/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	var strUsername=$("#RegisterForm_user_name").val();

	if(!regUsername.test(strUsername)){
		$("#user_name_tips").html("请输入一个合法的Email！");
		return false;
	}else{

		$.post(
			"/index.php?r=site/checkUser",
			{user_name:strUsername},
			function(data){
				$("#user_name_tips").html(data.msg);
				$("#ajaxCode").html(data.req);
			},"json");

			//alert();
			if($("#ajaxCode").html() == "ok"){
				return true;
			}
			return false;
	}
}

function checkPassword()
{
	var regPassword=/^[\S]{6,15}/;
	var strPassword=$("#RegisterForm_passwd").val();
	if(!regPassword.test(strPassword)){
		$("#passwd_tips").html("密码长度为6-18个字符！");
		return false;
	}else{
		$("#passwd_tips").html("√");
		return true;
	}
}

function checkMatchPasswd()
{
	var strPassword=$("#RegisterForm_passwd").val();
	var strPassword2=$("#RegisterForm_passwd2").val();
	if(strPassword!=strPassword2){
		$("#passwd2_tips").html("两次密码不一致!");
		return false;
	}else{
		$("#passwd2_tips").html("√");
		return true;
	}
}

function checkFirstname()
{
	var regFirstname=/^[\S]{1,10}/;
	var strFirstname=$("#RegisterForm_first_name").val();
	if(!regFirstname.test(strFirstname)){
		$("#first_name_tips").html("请输入合法的姓氏！");
		return false;
	}else{
		$("#first_name_tips").html("√");
		return true;
	}
}

function checkLastname()
{
	var regLastname=/^[\S]{1,10}/;
	var strLastname=$("#RegisterForm_last_name").val();
	if(!regLastname.test(strLastname)){
		$("#last_name_tips").html("请输入合法的名字！");
		return false;
	}else{

		$("#last_name_tips").html("√");
		return true;
	}
}




