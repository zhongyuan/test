
<?php $this->widget('AppWidget');?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/appPart.css"  />

<style>
    .team_name_error{
        font-size: 12px;
        color: red;
    }
    .team_sub{
        text-align: center;
        color:#323232;
    }

    .team_sub1{
        display: inline-block;
        margin: 20px 30px;
        width: 170px;
        height: 35px;
        border-radius: 10px;
        border:5px solid #f2f2f2;
    }
    .team_sub2{
        display: inline-block;
        margin: 20px 30px;
        width: 350px;
        height: 35px;
        border-radius: 10px;
        border:5px solid #f2f2f2;
    }
    .button1{
        position: relative;
        top: -2px;
        left: -2px;
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

    .more_member{
        display: none;
        margin-top: 25px;
    }
    .addposition{
        display: inline-block;
        margin-left: 735px;
    }
    .team_name_error2{
        font-size: 14px;
        color: red;
        width: 480px;
        display: inline-block;
        text-align: right;
    }
    .team_error3{
        font-size: 16px;
        color: red;
        margin-top: 10px;
    }
</style>

<div class="app_dbody">
    <div class="team_error3"><span ><?php echo $flag?$flag:null; ?></span></div>
	<h2 class="big_title">开始报名<img src="/images/news/app/add.jpg" align="absmiddle"/></h2>
	<div class="sec_label">请认真填写报名表，仅供主办方与您联系本次比赛事宜，不对第三方公开。</div>
    <form action="" method="post">
    <br /><span class="sec_label2">队伍名称</span><input type="text" name="team_name" class="app_pinputbox"><span class="app_star">*</span>
    <span class="team_name_error" hidden_val="0"></span>
	<h2 class="big_title">主联络人<img src="/images/news/app/people.jpg"/></h2>
	<div class="sec_label">此报名资讯仅提供与主办单位及承办单位联络使用，不作另它用途。</div>

		<table>
			<tr><td class="sec_label app_pleft ">姓名</td><td><input type="text" name="leader_name" class="app_pinputbox member_name"/></td><td class="app_star">*</td></tr>
			<tr><td class="sec_label app_pleft">Email</td><td><input type="text" name="leader_email"  class="app_pinputbox"></td><td class="app_star">*</td></tr>
			<tr><td class="sec_label app_pleft">联系手机/固话</td><td><input type="text" name="leader_phone"  class="app_pinputbox"/></td><td class="app_star">*</td></tr>
			<tr><td class="sec_label app_pleft">公司/学校职称</td><td><input  type="text" name="lea_company"  class="app_pinputbox"/></td><td class="app_star"></td></tr>
		</table>
<!--	</form>-->
	<h2 class="big_title">成员资料<img  src="/images/news/app/peoples.jpg"/></h2>
	<div class="sec_label">如为团队或公司形式参加，请至少填写一个队友资料</div>
<!--	<form name="form2">-->

            <div>
                <table>
                    <tr>
                        <td class="sec_label app_pleft ">队员2名称</td><td><input type="text" name="mem_2_name"  class="app_pinputbox member_name"/></td><td class="app_star">*</td>
                        <td class="sec_label app_pright ">队员3名称</td><td><input type="text" name="mem_3_name" class="app_pinputbox member_name"/></td><td></td>
                    </tr>
                    <tr>
                        <td class="sec_label app_pleft">Email</td><td><input type="text" name="mem_2_email"  class="app_pinputbox"></td><td class="app_star">*</td>
                        <td class="sec_label app_pright">Email</td><td><input type="text" name="mem_3_email"  class="app_pinputbox"></td><td></td>
                    </tr>
                    <tr>
                        <td class="sec_label app_pleft">联系手机/固话</td><td><input type="text" name="mem_2_phone" value="" class="app_pinputbox"></td><td class="app_star">*</td>
                        <td class="sec_label app_pright">联系手机/固话</td><td><input type="text" name="mem_3_phone" value="" class="app_pinputbox"></td><td></td>
                    </tr>
                    <tr>
                        <td class="sec_label app_pleft">公司/学校职称</td><td><input type="text" name="memb_2_company" value="" class="app_pinputbox"></td><td class="app_star"></td>
                        <td class="sec_label app_pright">公司/学校职称</td><td><input type="text" name="memb_3_company" value="" class="app_pinputbox"></td><td></td>
                    </tr>
                </table>
            </div>
            <div class="more_member">
                <table>
                    <tr>
                        <td class="sec_label app_pleft ">队员4名称</td><td><input type="text" name="mem_4_name"  class="app_pinputbox member_name"/></td><td class="app_star">&nbsp;&nbsp;</td>
                        <td class="sec_label app_pright ">队员5名称</td><td><input type="text" name="mem_5_name"  class="app_pinputbox member_name"/></td><td class="app_star"></td>
                    </tr>
                    <tr>
                        <td class="sec_label app_pleft">Email</td><td><input type="text" name="mem_4_email" value="" class="app_pinputbox"></td><td class="app_star"></td>
                        <td class="sec_label app_pright">Email</td><td><input type="text" name="mem_5_email" value="" class="app_pinputbox"></td><td></td>
                    </tr>
                    <tr>
                        <td class="sec_label app_pleft">联系手机/固话</td><td><input type="text" name="mem_4_phone" value="" class="app_pinputbox"></td><td class="app_star"></td>
                        <td class="sec_label app_pright">联系手机/固话</td><td><input type="text" name="mem_5_phone" value="" class="app_pinputbox"></td><td></td>
                    </tr>
                    <tr>
                        <td class="sec_label app_pleft">公司/学校职称</td><td><input type="text" name="memb_4_company" value="" class="app_pinputbox"></td><td class="app_star"></td>
                        <td class="sec_label app_pright">公司/学校职称</td><td><input type="text" name="memb_5_company" value="" class="app_pinputbox"></td><td></td>
                    </tr>
                </table>
            </div>
            <div><span class="team_name_error2"></span><a id="addMember" href="#_self" class="sec_label addposition">+更多队友</a></div>


	<!--</form>-->
	<h2 class="big_title">参赛需知<img src="/images/news/app/notice.jpg"/></h2>
	<ul class="d_items">

		<li>◆ 任何团体或者个人均可参赛(内部员工除外)，团体和个人皆以提交的作品为单位。</li>
		<li>◆ 参赛者需在大赛官网注册、报名、提交作品，参赛者报名必须提供真实的姓名、联系方式。如因参赛者提供的信息错误，导致主办方无法与参赛者取得联系，按自动弃权处理。</li>
		<li>◆ 报名时间：xx年xx月xx日-xx年xx月xx日，逾期提交无效。</li>
		<li>◆ 参赛作品审核成功后，将发布在大赛官网。最终比赛结果，将综合专家评审团和公众投票意见决定。</li>
		<li>◆ 比赛结果将在第二届COS开发者大会上公布并颁奖。所有资金为税前所得。</li>
		<li>◆ 主办方有权对参赛者活动资格进行审核，为核实参赛者的信息，主办方有权要求参赛者提供相关资料以供确认。</li>
		<li>◆ 参赛者必须保证作品的原创性、合法性，若出现剽窃其他个人或团体所开发应用的情况，将取消参赛资格，所引起的一切法律责任，均由作品开发者自然人或机构团体承担。</li>
		<li>◆ 在本活动期间，因故不能正常进行时，主办方有权决定取消、终止、修改或暂停活动。</li>
		<li>◆ 活动最终解释权归主办方所有。</li>
	</ul>

	 <div class="team_sub">
                <div class="team_sub1"><input type="reset" class="button1" value="重新填写" id="reset"/></div>
                <div class="team_sub2"><input id="submit" type="submit" name="submit" class="button1 select" value="我已阅读注意事项，同意参加"/></div>
     </div>
    </form>
</div>

<script>
    $(function(){
        //加队友
        $('#addMember').click(function(){
            $('.more_member').slideToggle('slow');
        });

        //异步检测队伍名
        $('input[name=team_name]').change(function(){
            var team_name = $(this).val();
            if(!team_name){
                $('.team_name_error').html('团队名字不能为空~');
                $('.team_name_error').attr('hidden_val','0');
                return false;
            }
            var user_name = "<?php echo Yii::app()->session['user_name']; ?>";
            if(!user_name){
                $('.team_name_error').html('对不起，请先登陆~');
                $('.team_name_error').attr('hidden_val','0');
                return false;
            }

            var url = "<?php echo $this->createUrl('news/ajaxAppPart') ?>";
            var data = "team_name="+team_name;
            ajaxJson(url,data,function(res){
                if(res.flag==1){
                    $('.team_name_error').html(res.msg);
                    $('.team_name_error').attr('hidden_val','1');
                }else{
                    $('.team_name_error').html(res.msg);
                    $('.team_name_error').attr('hidden_val','0');
                }
                return false;
            });
        });

        //检测提交按钮
        $('#submit').click(function(){
            $('.team_name_error2').html('');
            //判断空,第一个队员上心就行
            var success = false;
            $('input[name^=leader_]').each(function(){
                if(!$(this).val()){
                    $(this).focus();
                    $('.team_name_error2').html('你遗漏喽~');
                    success = true;
                    return false;
                }
            });

            if($('input[name=mem_2_name]').val()){
                $('input[name^=mem_2]').each(function(){
                    if(!$(this).val()){
                        $(this).focus();
                        $('.team_name_error2').html('你遗漏喽~');
                        success = true;
                        return false;
                    }
                });
            }

            //有效的email路径或者有效的联系方式
            $('input[name$=_email]').each(function(){
                var email = $(this).val()
                if(email){
                    if(!checkEmail(email)){
                        $(this).focus();
                        $('.team_name_error2').html('邮件格式有误~');
                        success = true;
                        return false;
                    }
                }
            });

            //联系方式
            $('input[name$=_phone]').each(function(){
                var phone = $(this).val()
                if(phone){
                    if(!checkPhone(phone)){
                        $(this).focus();
                        $('.team_name_error2').html('联系手机/固话有误~');
                        success = true;
                        return false;
                    }
                }
            });

            if(success){
                return false;
            }

            //判断队伍名字
            var teamNa_suc = $('.team_name_error').attr('hidden_val');
            if(teamNa_suc=='0'){
                $('.team_name_error').html('团队名字需重置或者你可能已经注册过了~');return false;
            }

            var member_names = new Array();
            //判断队员名字是否相同
            $('.member_name').each(function(){
                if($(this).val()){
                    member_names.push($(this).val());
                }
            });
            if(isRepeat(member_names)){
                $('.team_name_error2').html('队员名字有重复~');
                return false;
            }

        });

    });


    function ajaxJson(url,data,callfun)
    {
        $.ajax({
            type:"POST",
            url:url,
            data:data,
            dataType:'json',
            success:callfun,
            error:function(){
                alert('ajax fail~');
            },
        });
    }

    function isRepeat(arr){

         var hash = {};
         for(var i in arr) {  //经典写法，l like it
             if(hash[arr[i]])
                 return true;
             hash[arr[i]] = true;
         }
         return false;
    }

    function checkEmail(user_name)
    {
           //对电子邮件的验证
           var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
           if(!myreg.test(user_name))
           {
                return false;
           }else{
               return true;
           }
    }

    function checkPhone(phone){
        //手机或电话有一个正确就对了
        var phone_reg = /^(13|15|18)\d{9}$/;
        var tele_reg = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$/;
        if(phone_reg.test(phone)||tele_reg.test(phone)){
            return true;
        }
        return false;
    }

</script>