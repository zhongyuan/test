
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->widget('SearchWidget');
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cos_developer.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/ztree/css/zTreeStyle/zTreeStyle.css"  />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ztree/js/jquery.ztree.core-3.5.js"></script>

<SCRIPT type="text/javascript">
		<!--
		
		var zTree;
	var demoIframe;

	var setting = {
		view: {
			dblClickExpand: false,
			showLine: true,
			selectedMulti: false
		},
		data: {
			simpleData: {
				enable:true,
				idKey: "id",
				pIdKey: "pId",
				rootPId: ""
			}
		},
		callback: {
			beforeClick: function(treeId, treeNode) {
				var zTree = $.fn.zTree.getZTreeObj("tree");
				if (treeNode.isParent) {
					zTree.expandNode(treeNode);
					return false;
				} else {
					demoIframe.attr("src",treeNode.file);
					return true;
				}
			}
		}
	};

	var zNodes = <?php echo json_encode($data);?>

	$(document).ready(function(){
		var t = $("#tree");
		t = $.fn.zTree.init(t, setting, zNodes);
		demoIframe = $("#testIframe");
		demoIframe.bind("load", loadReady);
		var zTree = $.fn.zTree.getZTreeObj("tree");
		zTree.selectNode(zTree.getNodeByParam("id", 101));

	});

	function loadReady() {
		var bodyH = demoIframe.contents().find("body").get(0).scrollHeight,
		htmlH = demoIframe.contents().find("html").get(0).scrollHeight,
		maxH = Math.max(bodyH, htmlH), minH = Math.min(bodyH, htmlH),
		h = demoIframe.height() >= maxH ? minH:maxH ;
		if (h < 530) h = 530;
		demoIframe.height(h);
	}
	
	
		/*var setting = {treeNodeKey : "id", 	callback: {onClick: changeHtml}};
		var zNodes = <?php echo json_encode($data);?>
		
		function changeHtml(event, treeId, treeNode, clickFlag)
		{
			
			var action = treeNode.url;
			return false;
			
			
			var obj_id = $("a[href="+action+"]");
			alert(""+action+",obj_id"+obj_id);
			if(action.length){
				//$("#content",parent.document.body).attr("src", action); //替换父页面的content的语句，点击时执行替换
				return false;
			}
			return false;
		}

		$(document).ready(function(){
			$.fn.zTree.init($("#treeDemo"), setting, zNodes);
			$('.zTreeDemoBackground a').click(function(){
				var target = "/gaia/"+$(this).attr('href');
				$("#srcfrm").attr('src',target);
		        return false;
		    });
	
		});*/
		//-->
	</SCRIPT>
	
<div class="content_wrap">
	<div class="zTreeDemoBackground left">
		<ul id="tree" class="ztree"></ul>
	</div>
	<div class="right" id="htmlContent">
		<!--<iframe src="/gaia/def.html"  frameborder="1" id="srcfrm" width="99%" height="450"></iframe>-->
		
		<IFRAME ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=450px SRC="/gaia/def.html"></IFRAME>
	</div>
</div>