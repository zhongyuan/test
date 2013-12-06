<?php

class DeviceController extends Controller
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
         * 设备首页
         */
        public function actionIndex()
        {
			$this->actionSmphone();
            //$this->render('index');

        }
		
		/**
		* COS设备 - 智能手机 
		* 
		* 
		*/
//		public function actionSmphone()
//		{
//			$this->render('smphone');
//		}
		
		
		/**
		* COS设备 - 平板电脑 
		* 
		*/
		public function actionPad()
		{
			$this->render('pad');
		}
		
		/**
		*	COS设备 - 机顶盒 
		* 
		*/
		public function actionStb()
		{
			$this->render('stb');
		}


}
