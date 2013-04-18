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
            $criteria = new CDbCriteria(array(
                'select' => 'title,outline,image_name',
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


//            $dataProvider = new CActiveDataProvider('NewsList', array(
//                'criteria'=>$criteria,
//                'pagination'=>array(
//                    'pageSize'=>3,
//                    'itemCount'=>$count,
//                ),
//            ));
//            $this->render('index',array(
//                'dataProvider' => $dataProvider,
//            ));

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



        /*
         * 开发者大会首页
         */
        public function actionDevIndex()
        {
            $this->render('devIndex');
        }

        /*
         * 新闻报道
         */
        public function actionDevReport()
        {

			$criteria = new CDbCriteria(array(
                'select' => 'title,outline,image_name',
				'condition' => 'type =:type and status=:status',
                'order' => 'update_time desc',
                'params' => array(
                    ':type' => 2, //第一种类型
                    ':status' => 0, //新闻正常，没有被屏蔽
                ),
            ));
             $count=  NewsList::model()->count($criteria);
             $pages=new CPagination($count);

             // 返回前一页
             $pages->pageSize=3;
             $pages->applyLimit($criteria);
             $models = NewsList::model()->findAll($criteria);
			 
			 //第一种方法:判断请求
            if (Yii::app()->request->isAjaxRequest) {
                $this->renderPartial('_devReport',array(
                    'models' => $models,
                    'pages' => $pages,
                ));
                exit;
            }

            $this->render('devReport', array(
               'models' => $models,
               'pages' => $pages,

            ));
        }


        /*
         * 新闻报道详细页
         */
        public function actionDevDetail()
        {
            $news_id = $_GET['news_id']?$_GET['news_id']:null;
            $news_id = 9;
            if($news_id)
            {
                $mcND = new MCNewsDetail($news_id);
                $cmd  = $mcND->getNDById();
                $str = '<hr style="page-break-after:always;" class="ke-pagebreak" />';

                $news_detail = explode($str,$cmd);

                $pages=new CPagination(count($news_detail));
                $pages->pageSize=1;
                $currentPage = $pages->getCurrentPage();
                $news_detail = $news_detail[$currentPage];

                if(Yii::app()->request->isAjaxRequest){
                    $this->renderPartial('_devDetail',array(
                        'news_detail' => $news_detail,
                        'pages' => $pages,
                    ));
                    exit;
                }
                $this->render('devDetail',array(
                    'news_detail' => $news_detail,
                    'pages' => $pages,
                ));
            }
            $this->redirect(Yii::app()->user->returnUrl);
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

			$criteria = new CDbCriteria(array(
                'select' => 'img_name',
				'condition' => 'img_type =:img_type',
                'params' => array(
                    ':img_type' => 0, //第一种类型,大会现场图片
                ),
            ));
             $count=  ImageList::model()->count($criteria);
             $pages=new CPagination($count);

             // 返回前一页
             $pages->pageSize=6;
             $pages->applyLimit($criteria);
             $models = ImageList::model()->findAll($criteria);
			 
			  //第一种方法:判断请求
            if (Yii::app()->request->isAjaxRequest) {
                $this->renderPartial('_devScene',array(
                    'models' => $models,
                    'pages' => $pages,
                ));
                exit;
            }

            $this->render('devScene', array(
               'models' => $models,
               'pages' => $pages,

            ));

        }

		/**
		* 映射不同类型的图片路径
		* 目前映射的图片路径只是一个示例，后期根据需要可修改
		*
		* @param integer $type
		* @param string $img_name
		* @return string 图片的完整路径
		*
		*/
		public function _mapImagePath($img_name,$type = 0)
		{
			$mappings = array(
				0 => 'news/newsList/devScene/',
				1 => 'news/newsList/devManual/',
				3 => 'news/newsList/DevReceipt/',
				6 => 'news/worksUpload/big/'
			);
			if(isset($mappings[$type])){
				return $mappings[$type].$img_name;
			}
			return $mappings[0].$img_name;
		}

        /*
         * 应用开发大赛，首页
         */
        public function actionAppIndex()
        {
			$extConfig= Util::loadConfig('news');
			$reward_settings = $extConfig['reward_settings'];
			$this->render('appIndex', array(
                'reward_settings' => $reward_settings
            ));

        }

        /*
         * 应用开发大赛，参赛详情
         */
        public function actionAppDetail()
        {
            $this->render('appDetail');
        }

        /*
         * 应用开发大赛，报名参加
         */
        public function actionAppPart()
        {
            $this->render('appPart');
        }

        /*
         * 应用开发大赛，作品展示
         */
        public function actionAppShow()
        {

			$criteria = new CDbCriteria(array(
                'select' => 'work_name,work_brief,work_detail',
            ));
             $count=  TeamWork::model()->count($criteria);
             $pages=new CPagination($count);

             // 返回前一页
             $pages->pageSize=5;
             $pages->applyLimit($criteria);
             $models = TeamWork::model()->findAll($criteria);
			 
			 //第一种方法:判断请求
            if (Yii::app()->request->isAjaxRequest) {
                $this->renderPartial('_appShow',array(
                    'models' => $models,
                    'pages' => $pages,
                ));
                exit;
            }

            $this->render('appShow', array(
               'models' => $models,
               'pages' => $pages,

            ));
        }

        /*
         * 应用开发大赛，获奖名单
         */
        public function actionAppWinner()
        {
		
			$objWork = new MCTeamWork();
			$extConfig = Util::loadConfig("news");
			$rewardKeys = array_keys($extConfig['reward_settings']);
			$rewardCategory = implode(",",$rewardKeys);
			$rewardWorks = $objWork->getRewardWorks($rewardCategory);
			
			//生成页面所需要的数据内容
			$workList = array();
			
			foreach($extConfig['reward_settings'] as $ek=>$ev){
				$workList[$ek] = array();
				$workList[$ek]['label'] = $ev[0];	
			}
			
			
			foreach($rewardWorks as $r){
				$workList[$r['reward_category']]['data'][] = $r;
			}
			
			
			//加载视图
			$this->render('appWinner', array(
               'workList' => $workList

            ));
        }

        /*
         * 版本信息
         */
        public function actionVersion()
        {
            $this->render('version');
        }



}
