<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->widget('SearchWidget');
?>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.jscrollpane.css" type="text/css">
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.mousewheel.js"></script>
<style>
    .ref_body{
        width: 98%;
        margin: 0 auto;
        overflow: hidden;
    }
    .ref_body2{
        width: 980px;
        margin: 0 auto;
        overflow: hidden;
    }
    .leftpar{
        display: inline-block;
        width: 24%;
        vertical-align: top;
    }
    .rightpar{
        display: inline-block;
        width: 75%;
    }
    #leftpar-header {
        height: 19px;
        font-size: 14px;
        padding: 8px 0;
        margin: 0;
        border-bottom: 1px solid #CCC;
        background: rgba(242, 242, 242, 0.57)
    }
    .left_content{
        width: 100%;
        min-height:400px;
        max-height: 500px;
        font:14px 'lucida sans', 'trebuchet MS', 'Tahoma';
        outline: none;
        background-color: rgba(221, 221, 221, 0.04);
        overflow: hidden;
    }
    .title{
        padding: 0 5px;
    }
    .sdk_version{
        float: right;
        padding: 0 5px;
    }
    .api_version {
        display: inline-block;
        overflow: hidden;
    }
    .select{
        outline: none;
    }
    .active{
        font-weight: 500;
        color: rgb(255, 173, 47);
        background-color: rgba(242, 242, 242, 0.57);
    }
    .hightlight{
        font-weight: bold;
    }
    .black{
        color:black;
    }
    .gray{
        color:rgb(216, 215, 215);
    }
    .del{
        color:rgb(175, 165, 165);
        text-decoration: line-through;
    }
    .hidde{
        display: none;
    }
    .child_node:hover{
        font-weight: 500;
        color: #0099cc;
        background-color: rgba(242, 242, 242, 0.57);
    }
    .fullscreen{
        margin: 10px 0px;
        float: right;
        height: 25px;
        width: 25px;
        background: url('/images/developer/fullscreen.png') no-repeat 0px 0px; 
    }
    .fullscr_pos1{
        background-position: -24px 0px;
    }
</style>
<script>
    var demoIframe;
    $(function(){
        demoIframe = $("#testIframe");
        demoIframe.bind("load", loadReady);
        $('.child_node:first').addClass('active');

        $('.child_node').click(function(){
            var server = "<?php echo Yii::app()->request->hostInfo; ?>"+'/gaia_plugin2/';
            var link = $(this).attr('val');
            $('.child_node').removeClass('active');
            $(this).addClass('active');
            demoIframe.attr("src", server+link);
            return false;
        });
        return false;
    });

</script>

<div id="ref_body_id" class="ref_body2">
    <div class="leftpar">
        <div id ="leftpar-header">
            <div class="sdk_version">
                <div class="api_version">version:</div>
                <div class="api_version">
                    <select class="select">
                        <?php foreach($versions as $version):?>
                        <option lock="<?php echo 2;?>"><?php echo $version ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="title">COS APIs</div>
        </div>

        <div id="ddd" class="left_content">
            <ul >
                <?php foreach($cl_child as $child): ?>
                <a href="#_self"><li class="child_node" version=<?php echo $child['version']; ?>
                                     status=<?php echo $child['status']; ?>
                                     val="<?php echo $child['path']; ?>"><?php echo $child['name']; ?>
                                </li>
                </a>
                <?php endforeach;?>
            </ul>
        </div>

        <div>
            <a href="#_self" class="full_button"><div id="fullscreen" class="fullscreen"></div></a>
        </div>

    </div>

    <div class="rightpar">
        <IFRAME ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=600px SRC="<?php echo Yii::app()->request->hostInfo.'/gaia_plugin2/'; ?><?php echo $path?$path:'d5/d86/class_____gaia_call_log____.html'; ?>">
        </IFRAME>
    </div>
</div>

<script>
    $(function(){
      // scroll the selected page into view
        var element = $('.left_content').jScrollPane('');
        var api = element.data('jsp');
        //option 功能添加
        var version = $('.select').val();//获取select到的值
        changeCss(version);
        $('.select').change(function(){
            var version = $(this).val();//获取select到的值
            changeCss(version);
        });
        
        $('.full_button').click(function(){
            var ref_body = $('#ref_body_id');
            var current_class = ref_body.attr('class');
            if(current_class == "ref_body"){
                ref_body.removeClass('ref_body');
                ref_body.addClass('ref_body2');
            }else{
                ref_body.removeClass('ref_body2');
                ref_body.addClass('ref_body');
            }
            $('#fullscreen').toggleClass('fullscr_pos1');
            api.reinitialise();
        });
    });

    function changeCss(version)
    {
        //添加各种样式
        $('.child_node').each(function(){
            //删掉原有样式
            $(this).removeClass('hightlight');
            $(this).removeClass('gray');
            $(this).removeClass('del');
            $(this).removeClass('hidde');

            var belong_version = $(this).attr('version');
            var status = $(this).attr('status');
            var before_version = version - 1;

            if(belong_version == version){ //新加版本
                $(this).addClass('hightlight');
            }else if(belong_version <= version && status == 1){ //可用的
                //不处理
            }else if(status == 0 && belong_version == before_version){ //新版本删除的
                $(this).addClass('del');
            }else if(belong_version > version){ //高级的
                $(this).addClass('gray');
            }else if(status == 0 && belong_version != before_version && belong_version != version){ //以前版本已删除的，不显示
                $(this).addClass('hidde');
            }
        });
    }

</script>