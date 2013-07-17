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

    public function staticUrl($path)
    {
        if(!isset($path)){return ;}
        $arr = explode('/', $path);
        $baseUrl = Yii::app()->request->baseUrl;
        $baseUrl .= '/images';
        foreach ($arr as  $value) {
            if($value){
                $baseUrl .= '/'.$value;
            }
        }
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
}