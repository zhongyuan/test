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
        $filePath = dirname(__FILE__).'/../../gaia_plugin2/Nodes.xml';
//        $xml = simplexml_load_file($filePath);

        $xml_par = dirname(__FILE__).'/../extensions/xml/xml2Array.class.php';
        include $xml_par;
//        echo 'ddd';
        $array = XML2Array::createArray($filePath);

//        print_r($array);exit;
        //存入数据库流程
        $first_level = array();
        $second_level = array();
        $third_level = array();

        exit;

    }

}
