<style>
    
</style>
<div>
    <div id ="leftpar-header">
            <div class="title ">COS APIs</div>

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
    </div>

    <div  class="left_content">
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
<script>
$(function(){

    var demoIframe = $("#testIframe");
        demoIframe.bind("load", loadReady);
        //设置初始化iframe
        $("#testIframe").attr("src","<?php echo '/gaia_plugin2/'.$cl_child[0]['path'];?>");
    
        //滑动
        var element = $('.left_content').jScrollPane('');
        var api = element.data('jsp');
    
        //option 功能添加
        var version = $('.select').val();//获取select到的值
        changeCss(version);
        $('.select').change(function(){
            var version = $(this).val();//获取select到的值
            changeCss(version);
        });
        
        // 全屏按钮代码
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
        
        
        $('.child_node:first').addClass('active');

        $('.child_node').click(function(){
            var server = '/gaia_plugin2/';
            var link = $(this).attr('val');
            $('.child_node').removeClass('active');
            $(this).addClass('active');         
            demoIframe.attr("src", server+link);
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

            if(belong_version == version && version != 1){ //新加版本
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
    
	function loadReady() {
        
        demoIframe.height('');  //先将height置空
		var bodyH = demoIframe.contents().find("body").get(0).scrollHeight;
		var htmlH = demoIframe.contents().find("html").get(0).scrollHeight;
		var maxH = Math.max(bodyH, htmlH);
        var minH = Math.min(bodyH, htmlH);
		var h = demoIframe.height() >= maxH ? minH:maxH;
		if (h < 530) h = 530;
		demoIframe.height(h);

        //设置页面里面的样式
        demoIframe.contents().find("body").css({
            'font-size':"14px",'font-family':'lucida sans,trebuchet MS,Tahoma,sans-serif,Roboto,monospace','color':'#535353','width':'99%','overflow':'hidden','word-wrap':'break-word',
        });
        demoIframe.contents().find("a").css({'color':'#258aaf','margin':'0px 3px'});
        demoIframe.contents().find("h1").css({'font-size':'20px'});
        demoIframe.contents().find("td").css({'border':'1px solid #ccc'});
        demoIframe.contents().find("img").css({'max-width':'99%','overflow':'hidden','border':'1px solid #eee','padding':'1px'});

	}

});

</script>
