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
		* 读取消息的公共私有方法
		* @param undefined $type
		* @param undefined $view
		*
		*/
		private function _getNewsList($type,$view)
		{
			$criteria = new CDbCriteria(array(
                'select' => 'title,outline,image_name',
				'condition' => 'type =:type and status=:status',
                'order' => 'update_time desc',
                'params' => array(
                    ':type' => $type, //第一种类型
                    ':status' => 0, //新闻正常，没有被屏蔽
                ),
            ));
             $count=  NewsList::model()->count($criteria);
             $pages=new CPagination($count);

             // 返回前一页
             $pages->pageSize=3;
             $pages->applyLimit($criteria);
             $models = NewsList::model()->findAll($criteria);

             $this->renderView($view, array(
                'models' => $models,
                'pages' => $pages,
             ));
		}


        /**
         * 最新消息首页
         */
		 
		 
		public function actionIndex()
		{
			//$this->render('index');
			$this->actionIndexBakup();
		}
		
		/**
		 * 最新消息备选列表页 
		 * 
	     */
		public function actionList()
		{
			$this->render('list');
		}
		
		/**
		 * 最新消息详细页 
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
		 
        public function actionIndexBakup()
        {
            $criteria = new CDbCriteria(array(
                'select' => 'id,title,outline,image_name',
                'order' => 'update_time desc',
                'params' => array(
                    ':type' => 0, //第一种类型
                    ':status' => 0, //新闻正常，没有被屏蔽
                ),
            ));
             $count=  NewsList::model()->count($criteria);
             $pages=new CPagination($count);

             $pages->pageSize=3;
             $pages->applyLimit($criteria);
             $models = NewsList::model()->findAll($criteria);

             //第一种方法:判断请求
            if (Yii::app()->request->isAjaxRequest) {
                $this->renderPartial('_index',array(
                    'models' => $models,
                    'pages' => $pages,
                ));
                exit;
            }

            $this->render('index', array(
               'models' => $models,
               'pages' => $pages,

            ));


        }

}
