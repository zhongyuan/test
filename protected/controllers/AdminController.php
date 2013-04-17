<?php

class AdminController extends Controller
{

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

    /*
     * 登陆
     */
	public function actionIndex()
	{
        $session = Yii::app()->session;
        print_r($session);
        if(!$session['staff_id']){
            $this->redirect(array('admin/login'));
        }
        $this->render('index');
	}

    public function actionLogin()
    {
        if($_POST['admin'])
        {
            $mcAdmin = new MCAdmin(null,$_POST['admin']);
            $cmd = $mcAdmin->checkStaff();
            if($cmd&&$cmd['status']==0&&$_POST['password'] == $cmd['pass_word']){
                $session = Yii::app()->session;
                $session['staff_name'] = $cmd['staff_name'];
                $session['staff_id'] = $cmd['id'];
                $session['authority'] = $cmd['authority'];
                $session->setTimeout(3600);
                $this->redirect(array('admin/index'));
            }else{

            }
        }
        $this->render('login');
    }

    /*
     * 编辑添加文章
     */
    public function actionAddArtical()
    {

        if (!empty($_POST['content1'])&&$_POST['news_title']&&$_POST['outline']&&$_POST['image_name']) {

            if (get_magic_quotes_gpc()) { //判断php.ini中是否设置了默认加反斜杠。stripslashes删除， addslashes()添加
                $htmlData = stripslashes($_POST['content1']);
            } else {
                $htmlData = $_POST['content1'];
            }
            $type = $_POST['artical_type'] - 1;
            $title = $_POST['news_title'];
            $outline = $_POST['outline'];
            $image_name = $_POST['image_name'];
            //插入列表
            $cmd = MCAdmin::addNewsList($title,$outline,$image_name,$type,$_POST['active']);

            if($cmd){
                //获取id
                $id = MCAdmin::getLastestNewsId($title,$type);
                //插入详细页
                $suc = MCAdmin::addNewsDetail($id, $htmlData);
                $flag = $suc?'新闻成功生成~':'新闻详细页生成失败,需手动插入~';
            }else{
                $flag = '新闻列表生成失败~';
            }

        }

        $this->render('addArtical',array(
            'flag' => $flag,
            'htmlData' => $htmlData,
        ));
    }


}