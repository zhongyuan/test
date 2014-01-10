<?php

class AboutController extends Controller
{
	public function actionIndex()
	{
//		$this->render('index');
        $this->render('contact');
	}

    public function actionContact()
    {
        $this->render('contact');
    }
}