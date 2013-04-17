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
                $this->renderPartial('ajaxIndex',array(
                    'models' => $models,
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
            $this->render('devReport');
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

//                $pages=new CPagination(3);
//                var_dump($pages);exit;
                $this->render('devDetail',array(
                    'news_detail' => $news_detail,
//                    'pages' => $pages,
                ));
            }

//            $this->redirect(Yii::app()->request->returnUrl);
            $this->redirect(Yii::app()->user->returnUrl);
        }

        /*
         * 新闻报道详细页 ajax处理
         */
        public function actionAjaxDevDetail()
        {

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
            $this->render('appShow');
        }

        /*
         * 应用开发大赛，获奖名单
         */
        public function actionAppWinner()
        {
            $this->render('appWinner');
        }

        /*
         * 版本信息
         */
        public function actionVersion()
        {
            $this->render('version');
        }



}