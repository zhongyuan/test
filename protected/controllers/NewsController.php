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
	 * 最新消息首页
	 */
	public function actionIndex()
	{

			
            $criteria = new CDbCriteria(array(
                'select' => 'title,outline,img_little',
                'order' => 'update_time desc',
                'params' => array(
//                    ':status' => 0, //新闻正常，没有被屏蔽
                ),
            ));
             $count=  NewsList::model()->count($criteria);
             $pages=new CPagination($count);

             // 返回前一页
             $pages->pageSize=3;
             $pages->applyLimit($criteria);
             $models = NewsList::model()->findAll($criteria);

             $this->render('index', array(
                'models' => $models,
                'pages' => $pages,
             ));

	}

        /*
         * 开发者大会首页
         */
        public function actionDevIndex()
        {
            $this->render('devIndex');
        }

        /*
         * 大会详情
         */
        public function actionDevDetail()
        {
            $this->render('devDetail');
        }

        /*
         * 新闻报道
         */
        public function actionDevReport()
        {
            $this->render('devReport');
        }

        /*
         *开具发票
         */
        public function actionDevReceipt()
        {
            $this->render('devReceipt');
        }

        /*
         * 大会指南
         */
        public function actionDevManual()
        {
            $this->render('devManual');
        }

        /*
         * 大会现场
         */
        public function actionDevScene()
        {
            $this->render('devScene');
        }

        /*
         * 应用开发大赛，首页
         */
        public function actionAppIndex()
        {
            $this->render('appIndex');
        }

        /*
         * 应用开发大赛，参赛详情
         */
        public function actionAppDetail()
        {
            $this->render('appDetail');
        }
		
		
		



}