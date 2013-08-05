<?php

class DeveloperController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				'maxLength'=>7,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * training 即是get start 查看模式
	 */
	public function actionIndex()
	{
		$this->_cosDeveloper(MCApi::training);
	}

    /*
     * training的编辑模式
     */
    public function actionEditIndex()
    {
		$this->_cosDeveloper(MCApi::training,TRUE);
    }

    /*
     * developer guide
     */
    public function actionGuide()
    {
		$this->_cosDeveloper(MCApi::developer);	
    }

	/*
     * developer guide的编辑模式
     */
    public function actionEditGuide()
    {
        $this->_cosDeveloper(MCApi::developer,TRUE);
    }
	
	/**
	* 编辑模式与浏览模式的总输出方法 
	* @param undefined $type
	* @param undefined $editMode
	* 
	*/
	private function _cosDeveloper($type = 1,$editMode = FALSE)
	{
		$mcApi = new MCApi();
		$data = $mcApi->getTree($type);
		$view = $editMode ? "_cosEditDeveloper" : "_cosDeveloper";
		
		$switchUrl = "#";
		if($editMode){
			if($type == MCApi::training){
				$switchUrl = 'developer/index';
			}elseif($type == MCApi::developer){
				$switchUrl = 'developer/guide';
			}	
		}else{
			if($type == MCApi::training){
				$switchUrl = 'developer/editIndex';
			}elseif($type == MCApi::developer){
				$switchUrl = 'developer/editGuide';
			}
		}
		
		//搜索参数
		
		$viewData = array(
			'data' => $data,
			'switchUrl'=>$switchUrl
		);
		if(!$editMode){//普通浏览模式下
			$viewData['dataHtml'] = $this->_generateTreeHtml($data);
			$viewData['first_id'] = $data[0]['file'];
			$name = filter_var($_GET['name'],FILTER_SANITIZE_STRING);
			if(!empty($name)){
				$viewData['first_id'] = $name;//仅供搜索使用
			}
		}
		
		$this->render($view,$viewData);
	}

	/**
	 * 生成结点树对应的HTML 
	 * @param undefined $data
	 * 
	 */
	private function _generateTreeHtml($data,$active=TRUE)
	{
		$idx = 0;
		$html = "<ul>";
		foreach($data as $index=>$item){
			$idx++;
			if($idx == 1 && $active){
				$class = "active";
			}else{
				$class = "inactive";
			}
			$html.="<li><a class=\"".$class."\" id=\"f_".$item['id']."\" href=\"#\" name=\"".$item['file']."\">".$item['name']."</a>";
			if($item['isParent']){
				$html.=$this->_generateTreeHtml($item['children'],FALSE);//子节点初始化时无需激活
			}
			$html.="</li>";
		}
		$html.="</ul>";	
		return $html;
	}
	
	/**
	 * AJAX获取文档详细内容 
	 * 
	 */
	public function actionGetFileContent()
	{
		$filePath = filter_var($_POST['filePath'],FILTER_SANITIZE_STRING);
		$filePath = dirname(dirname(dirname(__FILE__))).$filePath;
		$jsonRst = array(
			'req' => "error",
			'msg' => "您要查看的文件未找到,可能已被删除!"
		);
		if(file_exists($filePath)){
			$content= file_get_contents($filePath);	
			$jsonRst = array(
				'req' => "ok",
				'msg' => $content
			);
		}
		echo json_encode($jsonRst);
		exit(0);	
	}
	
	
	/**
	 * AJAX更新节点名称 
	 * 
	 */
	public function actionAjaxUpdateNodeName()
	{
		$nodeName = filter_var($_POST['nodeName'],FILTER_SANITIZE_STRING);
		$nodeId = intval($_POST['nodeId']);
		
		$mcApi = new MCApi();
		$flag = $mcApi->updateNodeName($nodeName,$nodeId);
		if($flag){
			$jsonRst = array('req'=>"ok",'msg'=>"节点名称更新成功");	
		}else{
			$jsonRst = array('req'=>"error",'msg'=>"节点名称未作更新");
		}
		echo json_encode($jsonRst);
		exit(0);
			
	}
	
	
	/**
	 * 保存修改后的文档信息 
	 * 
	 */
	public function actionSaveFile()
	{
		$f_comment = $_POST['f_comment'];
		$f_path = filter_var($_POST['f_path'],FILTER_SANITIZE_STRING);
		$f_path = dirname(dirname(dirname(__FILE__))).$f_path;
		$jsonRst = array(
			'req' => "error",
			'msg' => "文件不存在，无法修改!"
		);
		if(file_exists($f_path)){
			if(file_put_contents($f_path,$f_comment)){
				$jsonRst = array(
					'req'=>"ok",
					'msg'=>"文档修改成功!"
				);
			}else{
				$jsonRst = array(
					'req'=>"error",
					'msg'=>"文档修改失败,可能您没有权限修改此文档!"
				);
			}
		}
		echo json_encode($jsonRst);
		exit(0);
		
	}
	
	
	/**
	 * AJAX删除树节点 
	 * 
	 */
	public function actionAjaxRemoveNode()
	{
		$nodeId = intval($_POST['nodeId']);
		$mcApi = new MCApi();
		$flag = $mcApi->removeNode($nodeId);
		if($flag){
			$jsonRst = array(
				'req'=>"ok",
				'msg'=>"节点删除成功"
			);
		}else{
			$jsonRst = array(
				'req'=>"error",
				'msg'=>"节点删除失败"
			);
		}
		
		echo json_encode($jsonRst);
		exit(0);
		
	}
	
	
	/**
	 * AJAX方式添加树节点 
	 * 
	 */
	public function actionAjaxAddNode()
	{
		$parentId = intval($_POST['parentId']);
		$nodeName = filter_var($_POST['nodeName'],FILTER_SANITIZE_STRING);
		$mcApi = new MCApi();
		$dbRst = $mcApi->addNode($nodeName,$parentId);
		if(!$dbRst[0]){
			$jsonRst = array(
				'req'=>"error",
				'msg'=>$dbRst[1]
			);
		}else{
			$jsonRst = array(
				'req'=>"ok",
				'msg'=>$dbRst[1]
			);
		}
		
		echo json_encode($jsonRst);
		exit(0);
		
	}
	
    /*
     * reference
     */
    public function actionReference()
    {
        $this->render('reference');
    }

    /*
     * tools 工具集，该是用来下载的
     */
    public function actionTools()
    {
        $this->render('tools');
    }

    /*
     * 即时搜索
     */
    public function actionApiSearch()
    {

    }

    /*
     * 表单搜索
     */
    public function actionFormSearch()
    {

    }

    /*
     * 导入xml文件到数据库
     */
    public function actionImportXML()
    {
//        $filePath = dirname(__FILE__).'/../../gaia_plugin2/Nodes.bak.xml';
//        $xml_par = dirname(__FILE__).'/../extensions/xml/xml2Array.class.php';
//        include $xml_par; //不能少
//        echo 'ddd';
//        $array = XML2Array::createArray($filePath);
        //第一步 加顶层 4条
//            $top_level = array(
//                0 => array('name' => 'Training','path' => 'ddd'),
//                1 => array('name' => 'Developer Guides','path' => 'ddd'),
//                2 => array('name' => 'API Reference','path' => 'ddd'),
//                3 => array('name' => 'Tools','path' => 'ddd'),
//            );
//
//            $suc = MCApi::addApiItem(0,$top_level);
//            echo $suc; exit;

//////      第二步 加Api reference第一层 10条
////        if($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node']){
////            foreach($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'] as $ar1){
////                $first_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
////            }
////            $suc = MCApi::addApiItem(MCApi::reference,$first_level);
////            echo $suc;
////        }
//
////      第三步 加related page 1条
////        $i = 5; $m = 0;
////        if($target_array = $array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][$m]['Subnodes']['Node']){
////            if(array_key_exists('Name',$target_array)){
////                $third_level[] = array('name'=>$target_array['Name'],'path'=>$target_array['Path']);
////            }else{
////                foreach($target_array as $ar1){
////                    $third_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
////                }
////            }
////
////            $suc = MCApi::addApiItem($i,$third_level);
////            echo $suc;
////        }
//
////      第四步 加class list  1133条
////        $i = 6;$m = 1;
////        if($target_array = $array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][$m]['Subnodes']['Node']){
////            if(array_key_exists('Name',$target_array)){
////                $third_level[] = array('name'=>$target_array['Name'],'path'=>$target_array['Path']);
////            }else{
////                foreach($target_array as $ar1){
////                    $third_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
////                }
////            }
////            $suc = MCApi::addApiItem($i,$third_level);
////            echo $suc;
////        }
//
//        //下面几部都需要修改 MCApi的getParIdByName函数id范围
//
////      第五步 加Class Hierarchy 866+275 = 1141条
////        $i = 8;$m = 3; //修改 getParIdByName 的id > 1148
////        $target_array = $array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][$m]['Subnodes']['Node'];
////        if($target_array){
////            foreach($target_array as $ar1){
////                $second_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
////                if($ar1['Subnodes']){
////                    $target_level_array[] = array('parent_name'=>$ar1['Name'],'Sub_note'=>$ar1['Subnodes']['Node']);
////                }
////            }
////            $suc = MCApi::addApiItem($i,$second_level);
////            echo $suc;
////            $str = MCApi::addChildNote($target_level_array);
////        }
//
////      第六步 加namespace list 30条
////        $i = 10; $m = 5;//数据库对应父节点id > 2289
////        $target_array = $array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][$m]['Subnodes']['Node'];
////        if($target_array){
////            foreach($target_array as $ar1){
////                $second_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
////                if($ar1['Subnodes']){
////                    $target_level_array[] = array('parent_name'=>$ar1['Name'],'Sub_note'=>$ar1['Subnodes']['Node']);
////                }
////            }
////            $suc = MCApi::addApiItem($i,$second_level);
////            echo $suc;
//////            $str = MCApi::addChildNote($target_level_array); //没有孩子
////        }
//
//
////      第七步 加filelist  1072条
////        $i = 12; $m = 7;//数据库对应父节点id > 2319
////        $target_array = $array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][$m]['Subnodes']['Node'];
////        if($target_array){
////            foreach($target_array as $ar1){
////                $second_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
////                if($ar1['Subnodes']){
////                    $target_level_array[] = array('parent_name'=>$ar1['Name'],'Sub_note'=>$ar1['Subnodes']['Node']);
////                }
////            }
////            $suc = MCApi::addApiItem($i,$second_level);
////            echo $suc;
//////            $str = MCApi::addChildNote($target_level_array); //没有孩子
////        }
//
////      第七步 加Directories 65条
////        $i = 13; $m = 8; //数据库对应父节点id > 3391
////        $target_array = $array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][$m]['Subnodes']['Node'];
////        $target_array = array($target_array); //这边是为了包一层
////        if($target_array){
////            foreach($target_array as $ar1){
////                $second_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
////                if($ar1['Subnodes']){
////                    $target_level_array[] = array('parent_name'=>$ar1['Name'],'Sub_note'=>$ar1['Subnodes']['Node']);
////                }
////            }
////            $suc = MCApi::addApiItem($i,$second_level);
////            echo $suc;
////            $str = MCApi::addChildNote($target_level_array);
////        }
//
//        exit;
//
    }

}
