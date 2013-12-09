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
				'maxLength'=>4,
				'minLength'=>4
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

    /*
     * about search
     */
    public function actionSearch()
    {
        $key = $_GET['key']?$_GET['key']:null;
        //空格 或 加号 分割
        if($key){

            $criteria = new CDbCriteria();
            $criteria->select = 'id,title,outline,record_time';
            $criteria->addCondition('status=0');
            $criteria->addSearchCondition('title', $key);
            $criteria->order = 'update_time desc';

             $count=  NewsList::model()->count($criteria);

             $pages=new CPagination($count);

             $pages->pageSize=7;
             $pages->applyLimit($criteria);
             $models = NewsList::model()->findAll($criteria);
        }

        $this->render('search',array(
            'results' => $models,
            'pages'   => $pages,
            'key'     => $key,
        ));
    }

        	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
        $message = $_GET['msg']?$_GET['msg']:null;

        if($message)
        {
            $this->render('error',array(
                'message' => $message,
            ));
        }
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

	/*public function actionLogin()
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

	}*/


   public function actionLogin()
   {
   	   $this->_doWithoutLogin();
           if($_POST){
	   		$_identify = new UserIdentity(filter_var($_POST['username'],FILTER_SANITIZE_STRING),filter_var($_POST['password'],FILTER_SANITIZE_STRING));
			if($_identify->authenticate()){
				$this->redirect($this->_getReturnUrl());
			}else{
				$returlUrl = $this->createUrl('site/login');
				header("Content-type:text/html;charset=UTF-8");
				echo "用户名或密码错误,<a href='$returlUrl'>返回</a>";
			}
			exit(0);
	   }
	   $this->render('login');
   }


    /**
	 * 获取登录后的跳转页面
	 *
	 */
	private function _getReturnUrl()
	{
		return "/";//登录后直接跳转至首页
		$session = Yii::app()->session;
		if(isset($session['referer'])){
			$returnUrl = $session['referer'];
			unset($session['referer']);
			return $returnUrl;
		}
		return Yii::app()->user->returnUrl;
	}


	/**
	 * 仅在未登录状态下可执行的操作
	 *
	 */
	private function _doWithoutLogin()
	{
		 $session = Yii::app()->session;
		 if($session['user_id']){
		   	$this->redirect('/');
			exit(0);
		 }
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

		$this->_doWithoutLogin();
        $extConfig = Util::loadConfig('register');

        $model = new RegisterForm();
        if(isset($_POST['RegisterForm'])){
            $model->attributes = $_POST['RegisterForm'];
			$userModel = new MCUsers($model->attributes['user_name']);

            //检查此Email是否已被注册
            if($userModel->checkUser()){
				echo json_encode(array(
					'req' => "error",
					'msg' => "此用户邮箱已被注册，请更换其他邮箱试试吧!"
				));
				exit(0);
            }

            //检测用户输入的表单内容
            $filterRst = $this->_filterUserInput($model->attributes);
            if(!$filterRst[0]){
				echo json_encode(array(
					'req' => "error",
					'msg' => $filterRst[1]
				));
				exit(0);
            }

            //添加一个新的用户信息
            $rst = $userModel->addUser($filterRst[1]);

            if($rst[0]){

                $session = Yii::app()->session;

                $session['user_id'] = $rst[1]['user_id'];
                $session['user_name'] = $rst[1]['user_name'];
                $session['first_name'] = $rst[1]['first_name'];
                $session['last_name'] = $rst[1]['last_name'];
				$session['authority'] = $rst[1]['authority'];

                $session['language'] = $rst[1]['language'];
                $session->setTimeout(3600*24);
				echo json_encode(array(
					'req' => "ok",
					'msg' => "恭喜您注册成功!",
					'return_url'=>"/"
				));

            }else{
				echo json_encode(array(
					'req' => "error",
					'msg' => $rst[1]
				));

            }
        	exit(0);

        }
        $this->render('register',array('model'=>$model,'extConfig'=>$extConfig));
    }

    public function actionAjaxCheckRegister()
    {
       $type = $_POST['type']?$_POST['type']:NULL;
       $str = $_POST['str']?$_POST['str']:NULL;
       if(!$type||!$str){
           echo json_encode(array('flag' => 0,'msg'=>'验证失败'));
           exit;
       }

       if($type==1){//验证cos_id
            $userModel = new MCUsers($str);
            $result = $userModel->checkUser();
            if($result){
                echo json_encode(array('flag' => 0,'msg'=>'很抱歉,此邮箱已被注册!'));
            }else{
                echo json_encode(array('flag' => 1,'msg'=>'恭喜您,该邮箱可以注册!'));
            }
       }elseif($type==2){ //验证验证码
           $verCode = $this->createAction('captcha')->getVerifyCode();
           if($str == $verCode){
               echo json_encode(array('flag' => 1,'msg'=>'验证码正确'));
           }else{
               echo json_encode(array('flag' => 0,'msg'=>'验证码错误'));
           }
       }
       exit;
    }

    /*
    * 检测用户表单输入的数据
    *
    */
   private function _filterUserInput($input = array())
   {
       if(empty($input)){
                       return array(false,"请填写注册信息");
       }

       $data = array();
       $fields = array('user_name','passwd','first_name','last_name');
       foreach($fields as $ef){
               if(!isset($input[$ef]) || empty($input[$ef])){
                       return array(FALSE,"注册信息不完整!");
                       break;
               }else{
                       $data[$ef] = $input[$ef];
               }
       }

                   //详细信息
       $data['passwd'] = md5($data['passwd']);
       $data['record_time'] = $data['update_time'] = time();
       $data['status'] = 1;//默认是注册后即激活用户(###后期可考虑只有通过邮件或手机验证后才激活用户###)
	   $data['authority'] = 2;//默认为SDK用户权限
       $data['question_id']=empty($input['question_id'])?0:$input['question_id'];
       $data['answer'] = empty($input['answer'])?"":$input['answer'];
       $data['language'] = empty($input['language'])?"zh-cn":$input['language'];


       if(!empty($input['year']) && !empty($input['month']) && !empty($input['day'])){
               $data['birthday'] = mktime(0,0,0,intval($input['month']),intval($input['day']),intval($input['year']));
       }else{
               $data['birthday'] = 0;
       }

       if(!empty($input['viaEmail']) && !empty($input['viaEPaper'])){
               $data['contact_type'] = 2;//两种联系方式都使用
       }elseif(!empty($input['viaEmail'])){
               $data['contact_type'] = 0;//仅使用电子邮件联系
       }elseif(!empty($input['viaEPaper'])){
               $data['contact_type'] = 1;//仅使用电子报联系
       }else{
               $data['contact_type'] = 100;//不使用任何方式联系此用户
       }

               //地址信息
       $address = array();
       $addFields = array('country','company','address','county','state','zip_code');
       foreach($addFields as $af){
               if(isset($input[$af]) && !empty($input[$af])){
                       $address[$af] = $input[$af];
               }
       }
       $address['update_time'] = $address['record_time'] = time();

       return array(TRUE,array('data'=>$data,'address'=>$address));
   }
   
   
    /**
	 * 找回密码 
	 * 
	 */
	public function actionGetPassword()
	{
        
                
		if(isset($_POST['sbt'])){
			
            $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
			if(!$email){
				echo json_encode(array('req' => "error",'msg' => '邮箱格式不正确'));
				exit(0);
			}


			$password = Util::genRandomString();
			$mcUsers = new MCUsers('system');
			$flag = $mcUsers->updatePwdByEmail($password,$email);
			if(!$flag){
				echo json_encode(array('req'=>'error','msg'=>"密码重置失败,此邮箱账户可能不存在,请稍候重试!"));
				exit(0);
			}

			//邮件通知用户
			$m_subject = "恭喜您密码重置成功";
			$m_content = "您的新密码为 : ".$password;
			$login_url = isset($_POST['login_url']) ? filter_var($_POST['login_url'],FILTER_VALIDATE_URL) : $this->createAbsoluteUrl('site/login');
			$m_content.= "<p>请妥善保管您的密码,您可以登录后修改此密码,<a href='$login_url'>点击登录</a></p>";
			$config = array(
				'Address' => $email,
				'Subject' => $m_subject,
				'Body'	  => $m_content
			);
			$this->sendmail($config);

			echo json_encode(array('req'=>"ok",'msg'=>"恭喜您,重置后的密码已发送至您的邮箱,请注意查收!"));
			exit(0);
		}
		$this->render('getPassword');
	}


}
