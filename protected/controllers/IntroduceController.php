<?php

class IntroduceController extends Controller
{
    /*
     * 完美兼容
     */
	public function actionIndex()
	{
		$this->render('index');
	}
    /*
     * 出色的性能表现
     */
    public function actionOutstanding()
    {
        $this->render('outstanding');
    }
    
    /*
     * 安全可靠
     */
    public function actionSafety()
    {
        $this->render('safety');
    }
    
    
    /*
     * 多终端&多窗口
     */
    public function actionMterminal()
    {
        $this->render('mterminal');
    }
    
    /*
     * 多重云
     */
    public function actionMcloud()
    {
        $this->render('mcloud');
    }
    
    /*
     * Martrix 桌面
     */
    public function actionMartrix()
    {
        $this->render('martrix');
    }
    
    /*
     * 智能语音
     */
    public function actionIvoice()
    {
        $this->render('ivoice');
    }
    
}