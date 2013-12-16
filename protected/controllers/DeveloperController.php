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
     * developer guide
     */
    public function actionGuide()
    {
		$this->_cosDeveloper(MCApi::developer);
    }

	

	/**
	 * 检测当前账户是否有编辑权限
	 *
	 */
	private function _checkEditable()
	{
		return FALSE;
	}


	/**
	 * 检查执行AJAX请求的编辑权限,防止绕过登录进行非法请求操作
	 *
	 */
	private function _checkAjaxEditPermit()
	{
		if(!$this->_checkEditable()){
			echo json_encode(array(
				'req' => "error",
				'msg' => "您没有权限执行此操作"
			));
			exit(0);
		}
	}


	/**
	* 编辑模式与浏览模式的总输出方法
	* @param undefined $type
	* @param undefined $editMode
	*
	*/
	private function _cosDeveloper($type = MCApi::training,$editMode = FALSE)
	{

		$mcApi = new MCApi();
		$data = $mcApi->getTree($type);
		$view = $editMode ? "_cosEditDeveloper" : "_cosDeveloper";

		$switchUrl = "#";
		$editable = $this->_checkEditable();
		if($editMode){
			if(!$editable){//无编辑权限的账户无权进行此操作
				$this->redirect("/");
				exit(0);
			}
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

		$viewData = array(
			'data' => $data,
			'switchUrl'=>$switchUrl,
			'editable' => $editable
		);
		if(!$editMode){//普通浏览模式下
			$viewData['dataHtml'] = $this->_generateTreeHtml($data);
			$viewData['first_id'] = $data[0]['file'];

			//搜索参数处理
			$file_id = intval($_GET['id']);
			$file_path = $mcApi->getFilePathById($file_id);
			if($file_path && file_exists(dirname(dirname(dirname(__FILE__))).$file_path)){
				$viewData['first_id'] = $file_path;
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
		$this->_checkAjaxEditPermit();
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
				'msg' => $this->_filterContent($content,$_POST['filePath'])
			);
		}
		echo json_encode($jsonRst);
		exit(0);
	}


	private function _FilterContent($content,$file)
	{
		$prefix = str_replace(end(explode("/",$file)),"",$file);
		if(preg_match_all("/src=\"(.*)\"/",$content,$matches)){
			$matches = $matches[1];
			foreach($matches as $m){
				if(strpos($m,"_plugin2/")){//本地文件
					continue;
				}
				$url = $prefix.$m;
				$content = str_replace($m,$url,$content);
			}
		}
		return $content;
	}


    /*
     * reference
     */
    public function actionReference()
    {
        $id = $_GET['id']?$_GET['id']:null;
        if($id){
            $target = Api::model()->findByPk($id);
        }
        $class_list = new MCApi(MCApi::reference);
        $cl_child = $class_list->getChildById();
        $versions  = $class_list->getVersionList();
        rsort($versions);

        $this->render('reference',array(
            'path' => $target->path,
            'cl_child' => $cl_child,
            'versions' => $versions,
        ));
    }

    /*
     * tools 工具集，该是用来下载的
     */
    public function actionDownload()
    {
        //明天修改
        $session = Yii::app()->session;
        //获取某个文档id
        $doc_id = $_GET['id']?$_GET['id']:null;
        $msg = null;
        if(!$doc_id){
            $msg = '参数丢失~';
        }
        $mcDoc = new MCDoc($doc_id);
        $doc_info = $mcDoc->getDocInfoById();
        if(!$doc_info){
            $msg = '获取文档信息错误~';
        }

        if($session['user_id']&&$session['authority']>$doc_info['available']){
            //跳转到
            $doc_name = $doc_info['doc_name'];
            $type = $doc_info['type'];
            $doc_conf = Util::loadConfig('doc');
            $type_str = $doc_conf['doc_types'][$type];     //类型文件夹
            $date = date("Ymd",$doc_info['record_time']); //日期文件夹

            $baseUrl = Yii::app()->params['target_file'];
            $url = '/uploads/'.$type_str.'/'.$date.'/'.$doc_id.'/'.$doc_name;
            $burl = $baseUrl.$url;  //只是用来判断目录是否存在，真正获取下载路径的设置在nginx配置中

            if(file_exists($burl)) //file_exists受权限影响
            {
                Yii::app()->request->xSendFile($url,array('forceDownload'=>1,'xHeader'=>'X-Accel-Redirect'));
            }else{
                $msg = '文件路径不正确，或者文件已删除~';
            }
        }else{
            $msg = '对不起，你没有权限下载~';
        }

        if($msg){
            $this->redirect(array('site/error','msg'=>$msg));
        }
       // $this->render('downloads');
    }
    
    /*
     * 下载流程
     */
    public function actionDocVersions()
    {
        // cos用户已经分类，权限分为游客、注册后可下载sdk用户、注册后可下载sdk和pdk用户
        // 是否发布与原来同步，
        //拿出版本类型
        $mcDoc = new MCDoc();
        $session = Yii::app()->session;
        $release = MCDoc::DOC_RELEASE;
        $status = MCDoc::DOC_STATUS;
        $limit = Yii::app()->params['max_version'];
        
        $mem_expired = MCDoc::getGlobalChange(MCDoc::global_key); //doc表是否有修改，有则更新memcache
        if($mem_expired == 1){
            Yii::app()->cache->set('ver_kinds',false);
            Yii::app()->cache->set('ver_details',false);
            Yii::app()->cache->set('ver_kinds_pdk',false);
            Yii::app()->cache->set('ver_details_pdk',false);
            MCDoc::updateGlobalRestore(MCDoc::global_key);
        }
        
        $pdk_key = $session['authority']>=  MCUsers::verify2?'_pdk':''; //pdk只有验证2级用户才可下载
        
        $key1 = 'ver_kinds'.$pdk_key;
        $key2 = 'ver_details'.$pdk_key;
        $ver_kinds = Yii::app()->cache->get($key1);
        $ver_details = Yii::app()->cache->get($key2);

        if(!$ver_kinds || !$ver_details){
            //执行并获取数据，存入缓存
            //版本个数，目前版本类型就写死两种SDK 和 PDK
            $ver_kinds['SDK'] = $mcDoc->getVersionType(MCDoc::SDK,$release,$status,$limit); //已发布并且状态为1
            $ver_kinds['ROM'] = $mcDoc->getVersionType(MCDoc::ROM,$release,$status,$limit);
            $ver_kinds['IDE'] = $mcDoc->getVersionType(MCDoc::IDE,$release,$status,$limit);

            //每个版本，详细文档内容
            $ver_details['SDK'] = $mcDoc->getDocByVer($ver_kinds['SDK'],MCDoc::SDK,$release,$status);
            $ver_details['ROM'] = $mcDoc->getDocByVer($ver_kinds['ROM'],MCDoc::ROM,$release,$status);
            $ver_details['IDE'] = $mcDoc->getDocByVer($ver_kinds['IDE'],MCDoc::IDE,$release,$status);

            if($session['authority']>=MCUsers::verify2){ //pdk只有验证2级用户才可下载
                $ver_kinds['PDK'] = $mcDoc->getVersionType(MCDoc::PDK,$release,$status,$limit);
                $ver_details['PDK'] = $mcDoc->getDocByVer($ver_kinds['PDK'],MCDoc::PDK,$release,$status);
                $ver_details['PDK'] = $mcDoc->sortDocByVer($ver_details['PDK']);
            }

            //按版本号归类
            $ver_details['SDK'] = $mcDoc->sortDocByVer($ver_details['SDK']);
            $ver_details['ROM'] = $mcDoc->sortDocByVer($ver_details['ROM']);
            $ver_details['IDE'] = $mcDoc->sortDocByVer($ver_details['IDE']);
//             $ver_details['mmssm'] = time(); //测试memcache是否有用的。必须开启memcached服务，才有用。
            Yii::app()->cache->set($key1,$ver_kinds,3600);
            Yii::app()->cache->set($key2,$ver_details,3600); 
        }
        
        $doc_conf = Util::loadConfig('doc');
        $doc_types = $doc_conf['doc_types'];


        $this->render('doc_versions',array(
            'ver_kinds' => $ver_kinds,
            'ver_details' => $ver_details,
            'doc_types'=> $doc_types,
        ));
    }

    /*
     * 表单搜索
     */
    public function actionApiFormSearch()
    {
        $search_api = $_GET['search_api']?$_GET['search_api']:null;
        $type = $_GET['type']?$_GET['type']:null;

        if(!$search_api||!$type){
            $this->redirect(Yii::app()->user->returnUrl);
        }

        $mcApi = new MCApi();
        $criteria = new CDbCriteria();
        $criteria->select = 'id,name,path,status';
        $criteria->addCondition("type = :type");
        $criteria->addSearchCondition('name', $search_api);
        $criteria->params[':type'] = $type;
        $criteria->order = 't.update_time desc';

        $count = Api::model()->count($criteria);

        $pages = new CPagination($count);
        $pages->pageSize = 15;
        $pages->applyLimit($criteria);

        $results = Api::model()->findAll($criteria);

        $type_array = array(
            1 => 'index',
            2 => 'guide',
            3 => 'reference',
        );

        //替换颜色
        MCApi::HightLightKeyWord($search_api,$results);

        $this->render('apiSearch',array(
            'search_api' => $search_api,
            'action' => $type_array[$type],
            'type' => $type,
            'results' => $results,
            'pages'   => $pages,
        ));
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
//        第一步 加顶层 4条
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
//      第四步 加class list  1133条
//        $i = MCApi::reference;$m = 1;
//        if($target_array = $array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][$m]['Subnodes']['Node']){
//            if(array_key_exists('Name',$target_array)){
//                $third_level[] = array('name'=>$target_array['Name'],'path'=>$target_array['Path']);
//            }else{
//                foreach($target_array as $ar1){
//                    $third_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
//                }
//            }
//            $suc = MCApi::addApiItem($i,$third_level);
//            echo $suc;
//        }
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
        exit;
//
    }

}
