<?php
    $this->widget('adminWidget');
?>

	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/themes/default/default.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/plugins/code/prettify.css" />
	<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/kindeditor.js"></script>
	<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/lang/zh_CN.js"></script>
	<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/plugins/code/prettify.js"></script>

<style>
    .articla_body{
        width: 100%;
    }
    .artical_sub{
        width: 100%;
        text-align: center;
        margin: 20px 0;
    }
    input[name=news_title]{
        width: 580px;
    }
    #showRemark{
        display: inline-block;
        color: red;
        font-size: 12px;
    }
    table{
        margin-bottom: 30px;
    }
    table tr{
        line-height: 40px;
    }
    .submit_result{
        font-size: 15px;
        color: red;
        
    }
</style>

<div class="articla_body">
    <div class="submit_result"><?php echo $flag; ?></div>
    <form name="artical" method="post" action="">
        <table>
            <tr>
                <td>类型：</td>
                <td><select name="artical_type">
                        <option  value ="1">最新消息首页的新闻</option>
                        <option  value ="2">开发者大会首页新闻</option>
                        <option value="3">开发者大会新闻报道</option>
                      </select>
                </td>
            </tr>
            <tr>
                <td>新闻标题：</td>
                <td><input type="text" name="news_title" value="" /></td>
            </tr>
            <tr>
                <td>新闻简介：</td>
                <td><textarea rows="10" cols="70" name="outline"></textarea></td>
            </tr>
            <tr>
                <td>关联图片</td>
                <td><input type="text" name="image_name" value="" /><div id="showRemark" >只写关联图片名，格式为：type_1_*.jpg</div></td>

            </tr>
            <tr>
                <td><input type="radio" name="active" checked value="0"> 激活</td>
                <td><input type="radio" name="active" value="1"> 不激活</td>
            </tr>
        </table>


            <textarea name="content1" style="width:960px;height:500px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea>

            <div class="artical_sub"><input id="submit" type="submit" name="button" value="提交内容" /></div>
    </form>
</div>


	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
//				cssPath : '../plugins/code/prettify.css',
//				uploadJson : '../php/upload_json.php',
//				fileManagerJson : '../php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=artical]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=artical]')[0].submit();
					});
				}
			});
			prettyPrint();
		});

        $(function(){
            $('select').change(function(){
                var type = $(this).val();
                var str = "只写关联图片名，格式为：type_"+type+"_*.jpg";
                $('#showRemark').html(str);
            });
            $('#submit').click(function(){
                var title = $('input[name=news_title]').val();
                var outline = $('textarea[name=outline]').val();
                var image_name = $('input[name=image_name]').val();
//                var artical = $('.ke-content').html();判断不了，有点诡异

                if(!title||!outline||!image_name){
                    alert('请填写完整');return false;
                }
            });
        });

	</script>
