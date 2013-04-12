<?php

class SiteController extends Controller
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
				'maxLength'=>7
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
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];


			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
                           $this->redirect(Yii::app()->user->returnUrl);
                        }
		}
		$this->render('login',array('model'=>$model));

	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
                $session = Yii::app()->session;
                $session->clear();
		$this->redirect(Yii::app()->homeUrl);
	}

        public function actionRegister()
        {
			$extConfig = Util::loadConfig('register');

			$model = new RegisterForm();
			if(isset($_POST['RegisterForm'])){
				$model->attributes = $_POST['RegisterForm'];



				if($model->validate()){
					//检查此Email是否已被注册
					$userModel = new MCUsers($model->attributes['user_name']);
					$rst = $userModel->addUser($model->attributes);
					if($rst[0]){
						var_dump($rst[1]);//打印用户注册的详细信息
						echo("SUCCESS");
					}else{
						echo("FAILED!");
					}

				}else{

					//$this->redirect(Yii:app()->user->returnUrl);
				}
				//exit(0);
			}
            $this->render('register',array('model'=>$model,'extConfig'=>$extConfig));
        }
		
	   /**
		* AJAX方式检测邮箱是否已被注册了 
		* 
		*/
		public function actionCheckUser()
		{
			$user_name = Yii::app()->getRequest()->getPost("user_name");
			$userModel = new MCUsers($user_name);
			$dbRst = $userModel->checkUser();
			
			$rst = array(
				'req'=>"ok",
				'msg'=>"恭喜您,该邮箱可以注册!"
			);
			if(!empty($dbRst)){
				$rst = array(
					'req'=>"error",
					'msg'=>"很抱歉,此邮箱已被注册!"
				);
			}
			
			echo json_encode($rst);
			exit(0);
		}
}
