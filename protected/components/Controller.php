<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public function filters()
    {
        return array(
            'accessControl',
            'browser',
        );
    }
	
	
//	public function filterAccessControl($filterChain)
//    {
//        //过滤session
//		//$this->_ajaxSessionCheck();
////		$this->checkIsLogin();  //删除开发者模块
//
//        $filterChain->run();
//
//    }
	
    /*
     * 检测浏览器类型，如果ie6以下，跳转到error页
     */
	public function filterBrowser($filterChain) {
//        echo $_SERVER["HTTP_USER_AGENT"];exit;
        if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0"))  
        {
            $msg = "你当前使用的IE版本过低，这会影响你的体验，请升级后再试~";
            $this->render('error',array('message' => $msg));
        }else{
            $filterChain->run();
        }
    }

    
    public function staticUrl($path,$type='images',$domain=0)
    {
        if(!$path){return ;} 
        $cdnUrl = Yii::app()->params['cdnUrl'][$domain]; //$domain 图片多时，可用多个域名服务器
        $baseUrl = $cdnUrl?$cdnUrl:Yii::app()->request->baseUrl; 
        $baseUrl .= '/'.$type.'/'.$path;
        return $baseUrl;
    }
    /**
    * 依据不同的请求类型决定是调用完整的View还是部分View
    * @param undefined $view
    * @param undefined $data
    *
    */
    public function renderView($view,$data=null)
    {
        if(Yii::app()->request->isAjaxRequest){
            $this->renderPartial($view,$data);
        }else{
            $this->render($view,$data);
        }
    }


    public function init()
    {
        if(isset($_REQUEST['lang'])&&$_REQUEST['lang']!="")
        {
            Yii::app()->language=$_REQUEST['lang'];
            setcookie('lang',$_REQUEST['lang']);
        }else if(isset($_COOKIE['lang'])&&$_COOKIE['lang']!="")
        {
            Yii::app()->language=$_COOKIE['lang'];
        }else{//默认是中文
            setcookie('lang','zh_cn');
            Yii::app()->language='zh_cn';
        }
    }


    public function langurl($lang = 'zh_cn'){ //用于生成多语言链接
        if($lang == Yii::app()->language) return '';
        $current_uri = Yii::app()->request->requestUri;
        if(strrpos($current_uri,'lang=' ))
        {
            //防止生成的 url 传值出现重复
            $langstr = 'lang='.Yii::app()->language;
            $current_uri = str_replace ('?'.$langstr.'&','?', $current_uri);
            $current_uri = str_replace ('?'.$langstr,'', $current_uri);
            $current_uri = str_replace ('&'.$langstr,'', $current_uri);
        }
        if(strrpos($current_uri,'?' ))
            return $current_uri.'&lang='.$lang;
        else
            return $current_uri.'?lang='.$lang;
    }
	
	/**
	 * 检测当前账户是否已登录 
	 * 
     */
	protected function checkIsLogin()
	{
		$session = Yii::app()->session;
        if(!$session['user_id']&&!in_array($this->getAction()->getId(),$this->authlessActions()))
        {
            $session['referer'] = Yii::app()->request->getHostInfo().Yii::app()->request->getRequestUri();
			$this->redirect(array('site/login'));
        } 
	}
	
	public function authlessActions()
    {
        return array('login','getPassword','register','captcha','ajaxCheckRegister','verify','privacy','error');
    }
	
	/**
	  *  公共的邮件发送接口调用
	  * @param undefined $config
	  * $config = array(
	  *     'Address' => '收件人邮箱' //必填参数，否则邮件无法发送,
	  *     'Subject' => '邮件主题' //必填参数，否则邮件无法发送,
	  *     'Body' => '邮件内容' //必填参数，否则邮件无法发送
	  *		'From' => '发件人邮箱' //可选参数，默认为系统发件人,
	  *     'FromName'=>'发件人名称' //可选参数，默认为系统发件人,
	  * 	'FilePath'=>'附件路径' //可选参数

	  * )
	  */
	 public function sendmail($config = array())
	 {
	 	$mail = Yii::app()->mailer;
	    $mail->IsSMTP();                                      // set mailer to use SMTP
	    $mail->Host = Yii::app()->params['emailHost'];  // specify main and backup server
	    $mail->SMTPAuth = true;     // turn on SMTP authentication
//        $mail->SMTPSecure = "ssl"; // 安全协议,此处不加，服务器没加，so
//        $mail->port = '25';
//        $mail->AuthType = "NTLM";
	    $mail->Username = Yii::app()->params['emailUser'];  // SMTP username
	    $mail->Password = Yii::app()->params['emailPass']; // SMTP password
		$mail->CharSet 	= "utf-8";
		$mail->IsHTML(TRUE);

	    $mail->From = isset($config['From']) ? $config['From'] : $mail->Username;
	    $mail->FromName = isset($config['FromName']) ? $config['FromName'] : $mail->Username;
		$Address = $config['Address'];
		$Subject = $config['Subject'];
		$Body    = $config['Body'];
		$AltBody = isset($config['AltBody']) ? $config['AltBody'] : "This is the body in plain text for non-HTML mail clients";

		//附件处理
		if(isset($config['FilePath']) && file_exists($config['FilePath'])){
			$mail->AddAttachment($config['FilePath']);
		}

		//收件人地址处理
		if(preg_match("/^[\S]+;/",$Address)){
			$Addresses = explode(";",$Address);
			foreach($Addresses as $ads){
				if(!empty($ads)){
					$mail->AddAddress($ads,$ads);
				}
			}
		}else{
			$mail->AddAddress($Address, $Receiver=''); // name is optional
		}

	    $mail->Subject = $Subject;
	    $mail->Body    = $Body;
	    $mail->AltBody = $AltBody;

        if(!$mail->Send()) {
           $error['flag']=false;
           $error['msg'] =  'Message could not be sent.'.'Mailer Error: ' . $mail->ErrorInfo;

        }else{
            $error['flag']=true;
        }
		return $error;
	 }
}