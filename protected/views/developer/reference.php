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
        width: 100%;
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
        height: auto;
        max-height: 400px;
        color: #222;
        font:12px/19px Roboto, sans-serif;
        outline: none;
        background-color: rgba(221, 221, 221, 0.04);
        overflow: auto;
    }
    .title{
        padding: 0 5px;
    }
    .active{
        font-weight: 500;
        color: rgb(255, 173, 47);
        background-color: rgba(242, 242, 242, 0.57);
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
	function loadReady() {
		var bodyH = demoIframe.contents().find("body").get(0).scrollHeight,
		htmlH = demoIframe.contents().find("html").get(0).scrollHeight,
		maxH = Math.max(bodyH, htmlH), minH = Math.min(bodyH, htmlH),
		h = demoIframe.height() >= maxH ? minH:maxH ;
		if (h < 530) h = 530;
		demoIframe.height(h);
	}
</script>

<div class="ref_body">
    <div class="leftpar">
        <div id ="leftpar-header">
            <div class="title">COS APIs</div>
        </div>
        <div class="left_content">
            <ul >
                <?php foreach($cl_child as $child): ?>
                <a href="#_self"><li class="child_node" val="<?php echo $child['path']; ?>"><?php echo $child['name']; ?></li></a>
                <?php endforeach;?>
            </ul>
        </div>

    </div>

    <div class="rightpar">
        <IFRAME ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=600px SRC="<?php echo Yii::app()->request->hostInfo; ?>/gaia_plugin2/d5/d86/class_____gaia_call_log____.html">
        </IFRAME>
    </div>
</div>

<script>
    $(function(){
        var settings = {
            showArrows: true,
            verticalDragMinHeight: 20,
            verticalDragMaxHeight: 20,
            horizontalDragMinWidth: 30,
            horizontalDragMaxWidth: 30
        };
        $('.left_content').jScrollPane(settings);
    });
</script>