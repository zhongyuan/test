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
		$this->render('index');
	}

    /*
     * training的编辑模式
     */
    public function actionEditIndex()
    {

    }

    /*
     * developer guide
     */
    public function actionGuide()
    {
        $this->render('guide');
    }

    /*
     * developer guide的编辑模式
     */
    public function actionEditGuide()
    {
        
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
