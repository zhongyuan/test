
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->widget('SearchWidget');
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cos_developer.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/ztree/css/zTreeStyle/zTreeStyle.css"  />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ztree/js/jquery.ztree.core-3.5.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ztree/js/jquery.ztree.exedit-3.5.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.form.js" type="text/javascript"></script>


<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/plugins/code/prettify.css" />
<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/lang/zh_CN.js"></script>
<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/kindeditor-4.1.6/plugins/code/prettify.js"></script>

<SCRIPT type="text/javascript">
		
		var editor1 = null;
		KindEditor.ready(function(K) {
				editor1 = K.create('textarea[name="f_comment"]', {
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
					});
				}
			});
			prettyPrint();
		});
		
	
		var zTree;
		var demoIframe;
		var newCount;
		var setting = {
			view: {
				dblClickExpand: false,
				showLine: true,
				selectedMulti: false,
				addHoverDom: addHoverDom,
				removeHoverDom: removeHoverDom,
			},
			data: {
				simpleData: {
					enable:true,
					idKey: "id",
					pIdKey: "pId",
					rootPId: ""
				}
			},
			edit:{
				enable:true
			},
			callback: {
				beforeClick: function(treeId, treeNode) {
					
					$.ajax({
					     type: 'POST',
					      url: "<?php echo $this->createUrl('getFileContent');?>",
					     data: {filePath:treeNode.file} ,
					  success: function(data){
					  		editor1.html(data.msg);
							$("#f_path").val(treeNode.file);
					  } ,
					 dataType: "json"
					});
				},
				onRename: function zTreeOnRename(event, treeId, treeNode, isCancel){
					if(isCancel){
						return false;
					}
					$.ajax({
					     type: 'POST',
					      url: "<?php echo $this->createUrl('ajaxUpdateNodeName');?>",
					     data: {nodeName:treeNode.name,nodeId:treeNode.id} ,
					  success: function(data){
							alert(data.msg);
							if(data.req == "error"){
								$.fn.zTree.getZTreeObj("tree").cancelEditName();//修改失败时,恢复节点原有名称
							}
					  } ,
					 dataType: "json"
					});
				},
				beforeRemove: function zTreeBeforeRemove(treeId, treeNode){
					if(!confirm("确定删除此节点?\n删除后数据将不可恢复!")){
						return false;
					}
					//执行AJAX删除操作
					$.ajax({
					     type: 'POST',
					      url: "<?php echo $this->createUrl('developer/ajaxRemoveNode');?>",
					     data: {nodeId:treeNode.id} ,
					  success: function(data){
							alert(data.msg);
							//window.location.reload();//重新加载页面
					  } ,
					 dataType: "json"
					});	
				},
			}
		};

		//鼠标悬停操作
		function addHoverDom(treeId, treeNode) {
			
			var sObj = $("#" + treeNode.tId + "_span");
			if (treeNode.editNameFlag || $("#addBtn_"+treeNode.tId).length>0) return;
			var addStr = "<span class='button add' id='addBtn_" + treeNode.tId
				+ "' title='add node' onfocus='this.blur();'></span>";
			sObj.after(addStr);
			
			
			var btn = $("#addBtn_"+treeNode.tId);
			if (btn) btn.bind("click", function(){
				
				//开始设置节点名称
				var newName = window.prompt("请填写节点名称","");
				if(!newName){
					return false;
				}
				var zTree = $.fn.zTree.getZTreeObj("tree");
				zTree.addNodes(treeNode, {id:(100 + newCount), pId:treeNode.id, name:newName});
				
				//提交后台操作
				ajaxAddNode(treeNode.id,newName);
				return false;
			});
		};
		
		
		//AJAX提交后台处理新增节点
		function ajaxAddNode(parentId,nodeName)
		{
			$.ajax({
			     type: 'POST',
			      url: "<?php echo $this->createUrl('developer/ajaxAddNode');?>",
			     data: {parentId:parentId,nodeName:nodeName} ,
			  success: function(data){
					alert(data.msg);
					window.location.reload();//重新加载页面
					/*if(data.req == "error"){
						window.location.reload();//重新加载页面	
					}*/
			  } ,
			 dataType: "json"
			});	
		}
		
		//鼠标移走操作
		function removeHoverDom(treeId, treeNode) {
			$("#addBtn_"+treeNode.tId).unbind().remove();
		};
		
		var zNodes = <?php echo json_encode($data);?>

		$(document).ready(function(){
			var t = $("#tree");
			t = $.fn.zTree.init(t, setting, zNodes);
			demoIframe = $("#testIframe");
			var zTree = $.fn.zTree.getZTreeObj("tree");
			zTree.selectNode(zTree.getNodeByParam("id", 101));

			//表单提交处理
			$("#sbt").click(function(){
				if($("#f_path").val() == ""){
					alert("请选择要编辑的文档!");
					return false;
				}
				$("#file_form").ajaxForm({
					dataType : 'json',
					success : function(data){
						alert(data.msg);
					} 
				});
				
			});
			
		});
		
	</SCRIPT>
	
<div class="content_wrap">
	<h3><a href="<?php echo $this->createUrl($switchUrl);?>">→进入浏览模式</a></h3>
	<div class="zTreeDemoBackground left">
		<ul id="tree" class="ztree"></ul>
	</div>
	<div class="right" id="htmlContent">
		<form id="file_form" method="POST" action="<?php echo $this->createUrl('developer/saveFile');?>">
			<textarea id="f_comment" name="f_comment"></textarea>
			<input type="hidden" name="f_path" id="f_path" value=""/>
			<input type="submit" name="sbt" id="sbt" value="保存修改"/>
		</form>
	</div>
</div>