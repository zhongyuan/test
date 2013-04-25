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
                'select' => 'id,title,outline,image_name',
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
//            $news_id = 9;
            if($news_id)
            {
                $mcND = new MCNewsDetail($news_id);

                $cmd  = $mcND->getNDById();
               // echo Yii::app()->cache->get('news_detail_9');exit; //有用了
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
            //判断post
            if($_POST){
                $flag = null;
                $team_name = $_POST['team_name'];
                $leader_name = $_POST['leader_name'];
                $leader_email = $_POST['leader_email'];
                $leader_phone = $_POST['leader_phone'];
                $lea_company = $_POST['lea_company'];
                if(!$team_name||!$leader_name||!$leader_email||!$leader_phone){
                    $flag = "参数丢失，或必填项未写";
                }

                //session
                $user_id = Yii::app()->session['user_id'];
                if(Yii::app()->user->isGuest||!$user_id){
                    $this->redirect(array('site/login'));
                }

                $mem_2_name = $_POST['mem_2_name'];
                if($mem_2_name){
                    $mem_2_phone = $_POST['mem_2_phone'];
                    $mem_2_email = $_POST['mem_2_email'];
                    $mem_2_company = $_POST['memb_2_company'];
                    if(!$mem_2_phone||!$mem_2_email){
                        $flag = "参数丢失，或必填项未写";
                    }
                }
                //判断是否已经注册过，是否已经被占用
                $is_rebuild = MCTeam::checkIsRebuild($user_id);
                $check_name = MCTeam::checkTeamName($team_name);

                //验证邮箱和手机号，视具体情况定
                $check_email = MCTeam::checkEmails(array($leader_email,$mem_2_email));
                $check_phone = MCTeam::checkPhoneTeles(array($leader_phone,$mem_2_phone));

                if($is_rebuild||$check_name||!$check_email||!$check_phone){
                    $flag = "你已经注册过，或者团队名字已被占用，或者邮箱电话格式有问题~";
                }

                //数据库相关操作
                if(!$flag){
                    //其他的member,整理成数组
                    $other_mems = MCTeam::sortPostData($_POST);

                    //插入数据库，要事务
                    $mcTeam = new MCTeam(null, $team_name);
                    $transaction = Yii::app()->db->beginTransaction();
                    try {
                        $mcTeam->addTeam($user_id,$leader_name,$leader_email,$leader_phone,$lea_company);
                        $team_id = MCTeam::getLastInsertId();

                        if($mem_2_name){
                            $mcTeam->addTeamMember($mem_2_name,$team_id,$mem_2_email,$mem_2_phone,$mem_2_company);
                        }
                        //其他member用数组一次性插入
                        if($other_mems&&count($other_mems)>0){
                            $mcTeam->addTeamMemberBatch($other_mems, $team_id);
                        }
                        $transaction->commit();
                        $flag = '恭喜你，团队创建成功~';
                    } catch (Exception $exc) {
                        $transaction->rollback();
                        $flag = "抱歉，团队建设失败~";
                    }
                }
                //插入成功了，该跳到新页面,团队创建成功，显示队友
                $this->render('appPart',array(
                    'flag' => $flag,
                ));
            }
            $this->render('appPart');
        }

        /*
         * 报名参加的队伍名称的验证函数
         */
        public function actionAjaxAppPart()
        {
            $team_name = $_POST['team_name']?$_POST['team_name']:null;
            if(!$team_name){
                echo json_encode(array('flag' => 0,'msg'=>'网络信号不好，参数丢失~'));
                exit;
            }
            $user_id = Yii::app()->session['user_id'];
            if(!$user_id){
                echo json_encode(array('flag' => 0,'msg'=>'请先登陆~'));
                exit;
            }

            //检测数据库是否有该名字
            $check_name = MCTeam::checkTeamName($team_name);

            if($check_name){
                echo json_encode(array('flag' => 0,'msg'=>'该名字已被占用哦~'));
                exit;
            }
            //检测该用户是否是已经注册过一个团队
            $is_rebuild = MCTeam::checkIsRebuild($user_id);
            if($is_rebuild){
                echo json_encode(array('flag' => 0,'msg'=>'你已经注册过一个团队了哦~'));
                exit;
            }
            echo json_encode(array('flag' => 1,'msg'=>'可以使用~'));
            exit;
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
