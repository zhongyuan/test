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
}