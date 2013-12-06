<?php

class IntroduceController extends Controller
{
    /*
     * 多平台支持
     */
	public function actionIndex()
	{
		$this->render('index');
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