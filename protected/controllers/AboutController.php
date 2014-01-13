<?php

class AboutController extends Controller
{
	public function actionIndex()
	{
        $this->setPageTitle('COS官网 - 联系我们');
//		$this->render('index');
        $this->render('contact');
	}

    public function actionContact()
    {
        $this->render('contact');
    }
}