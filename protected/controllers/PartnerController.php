<?php

class PartnerController extends Controller
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
	 * 合作伙伴 - 产业链 
	 * 
	 */
	public function actionIndex()
	{
        $this->render('ecology');  //暂时隐藏掉产业链

//		$criteria = new CDbCriteria(array(
//            'select' => 'id,title,outline,image_name',
//            'order' => 'update_time desc',
//            'params' => array(
//                ':type' => 1, //第二种类型
//                ':status' => 0, //新闻正常，没有被屏蔽
//            ),
//        ));
//         $count=  NewsList::model()->count($criteria);
//         $pages=new CPagination($count);
//
//         $pages->pageSize=4;
//         $pages->applyLimit($criteria);
//         $models = NewsList::model()->findAll($criteria);
//
//         //第一种方法:判断请求
//        if (Yii::app()->request->isAjaxRequest) {
//            $this->renderPartial('_industry',array(
//                'models' => $models,
//                'pages' => $pages,
//            ));
//            exit;
//        }
//
//        $this->render('industry', array(
//           'models' => $models,
//           'pages' => $pages,
//        ));
        }


	/**
	 * 合作伙伴 - 生态链 
	 * 
	 */
	public function actionEcology()
	{
		$this->render('ecology');
	}
	
	
	/**
	 * 合伙伙伴 - 产业链详细页 
	 * 
     */
	public function actionDetail()
	{
		$news_id = $_GET['news_id']?$_GET['news_id']:null;
        if($news_id)
        {
            $mcNews = new MCNewsList($news_id);

            $news_info  = $mcNews->getNewsById();
			$this->render('detail',array(
                'news_info' => $news_info
            )); 
        }
	}
}