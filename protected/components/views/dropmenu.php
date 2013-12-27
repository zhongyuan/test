
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dev_dropmenu_page.css" type="text/css">
<div>
    <div class="huadong">
        <div id="leftMenu">
            <div class="menu">
                <?php  echo $datahtml; ?>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){

    var demoIframe = $("#testIframe");
    demoIframe.bind("load", loadReady);
    //设置初始化iframe
    $("#testIframe").attr("src","<?php echo $first_id;?>");
    
    //滑动
	$('.huadong').jScrollPane({'autoReinitialise': true});
    
    var b = jQuery.extend({
        Speed: 220,
    },b);
    //自己写 加油
    $('.menu a').each(function(){
        //有子节点的再显示 up_icon
        if($(this).parent("li").children("ul")[0]){
            $(this).addClass('up_icon');
        }   
    });
    $('.menu a').click(function(){
        var a = $(this); //被点击的a标签
        
        demoIframe.attr("src",$(this).attr("name")); //换iframe内容

        $('.menu a').removeClass('green_color'); //清理所有green_color，因为有可能点击叶子节点后，再点击非叶子节点

        //点击某个标签时，他的兄弟标签要隐藏。
        var parent_siblings = a.parent().siblings();
        parent_siblings.each(function(){
            if($(this).children('a').attr('class') == 'down_icon'){  
                $(this).children('a').removeClass('down_icon').addClass('up_icon');
                $(this).children('ul').slideUp(b.Speed);
                if($(this).children('a').attr('bg_color') == 'top_bg'){ //设置顶层背景
                    $(this).children('a').css('background-color','#ffffff');
                }
            }
            
        });
        
        if(a.attr('class') == 'up_icon'){ //当前是否有子标签，即是否有up_icon 
            a.parent().children('ul').slideDown(b.Speed / 1.2,function(){
                a.removeClass('up_icon').addClass('down_icon');
            });
            if(a.attr('bg_color') == 'top_bg'){  //设置顶层背景
                a.css('background-color','#E4E4E4');
            }
        }
        
        if(a.attr('class') == 'down_icon'){ //当前标签已经被打开了，再点击需要收起来
            a.removeClass('down_icon').addClass('up_icon');
            a.parent().children('ul').slideUp(b.Speed);
            if(a.attr('bg_color') == 'top_bg'){  //设置顶层背景
                a.css('background-color','#ffffff');
            }
        }
        
        if(a.attr('class') == ''){  //没有子标签的a标签
//            $('.menu a').removeClass('green_color'); //remove 所有的class,上面删除了，这边不做处理
            a.addClass('green_color');
        }

    });

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
        demoIframe.contents().find("table").css({'font-size':'12px','width':"99%"});
		demoIframe.contents().find("img").css({'max-width':'99%','overflow':'hidden','border':'1px solid #eee','padding':'1px'});

	}

});

</script>
