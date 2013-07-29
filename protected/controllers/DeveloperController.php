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
	 * training 即是get start
	 */
	public function actionIndex()
	{


		$this->render('index');
	}

    /*
     * developer guide
     */
    public function actionGuide()
    {
        $this->render('guide');
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
     * 导入xml文件到数据库
     */
    public function actionImportXML()
    {
        $filePath = dirname(__FILE__).'/../../gaia_plugin2/Nodes.bak.xml';
//        $xml = simplexml_load_file($filePath);

        $xml_par = dirname(__FILE__).'/../extensions/xml/xml2Array.class.php';
        include $xml_par;
        echo 'ddd';
        $array = XML2Array::createArray($filePath);

        //存入数据库流程，第一层
//        if($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node']){
//            foreach($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'] as $ar1){
//                $first_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
//            }
//            $suc = MCApi::addApiItem(MCApi::reference,$first_level);
//            echo $suc;
////            print_r($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node']);exit;
//        }
//        $i=4;
        //第二层（第一个的子节点）
//        $i ++;
//        if($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][0]['Subnodes']){
//            foreach($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][0]['Subnodes'] as $ar1){
//                $second_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
//            }
//            $suc = MCApi::addApiItem($i,$second_level);
//            echo $suc;
//        }

        //第二层（第二个的子节点）
//        $i ++;
//        if($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][1]['Subnodes']['Node']){
//            foreach($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][1]['Subnodes']['Node'] as $ar1){
//                $third_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
//            }
//            $suc = MCApi::addApiItem($i,$third_level);
//            echo $suc;
//        }
        //第二层（第三个的子节点）没有，so跳过
//        $i ++;
//        if($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][2]['Subnodes']['Node']){
//            foreach($array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][1]['Subnodes']['Node'] as $ar1){
//                $third_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
//            }
//            $suc = MCApi::addApiItem($i,$third_level);
//            echo $suc;
//        }
        //第二层（第四个的子节点）
//        $i ++;
        $i = 4;
        $target_array = $array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][3]['Subnodes']['Node'];
        if($target_array){
            foreach($target_array as $ar1){
                $second_level[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
                if($ar1['Subnodes']){
                    $target_level_array[] = array('parent_name'=>$ar1['Name'],'Sub_note'=>$ar1['Subnodes']['Node']);
                }
            }
//
            $suc = MCApi::addApiItem($i,$second_level);
            echo $suc;
//print_r($target_level_array);exit;
            $str = MCApi::addChildNote($target_level_array);
        }

        //第三 四层补充上一个

        //第二层（第六个的子节点）
//        $i ++;
//        $target_array = $array['DocSetNodes']['TOC']['Node']['Subnodes']['Node'][5]['Subnodes']['Node'];
//        if($target_array){
//            foreach($target_array as $ar1){
//                $forth_node[] = array('name'=>$ar1['Name'],'path'=>$ar1['Path']);
//            }
//            $suc = MCApi::addApiItem($i,$forth_node);
//            echo $suc;
//        }
        //第二层（第六个的子节点）
        //第二层（第七个的子节点）
        //第二层（第八个的子节点）



//        print_r($first_level);exit;

//        $top_level = array(array('name'=>'training','path'=>0),array('name'=>'api guide','path'=>0),
//            array('name'=>'reference','path'=>0),array('name'=>'tools','path'=>0));

//        $suc = MCApi::addApiItem(0,$top_level);


        exit;

    }

}
