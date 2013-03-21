<?php

class NewsController extends Controller
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
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
//            $start = $_GET['page']?$_GET['page']:0;
//            
//            $news = MCNews::getOutline($start);
//            $cmd = MCNews::insertNewsList();
//            if($cmd){
//                echo 'insert succ';
//            }else{
//                echo 'fail';
//            }
//            
//                $criteria = new CDbCriteria();
//                $count=Article::model()->count($criteria);
//                $pages=new CPagination($count);
//
//                // 返回前一页
//                $pages->pageSize=10;
//                $pages->applyLimit($criteria);
//                $models = Post::model()->findAll($criteria);
//
//                $this->render('index', array(
//                'models' => $models,
//                     'pages' => $pages
//                ));
            
            
            
		$this->render('index');
	}



}