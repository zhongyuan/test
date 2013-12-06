<?php

class PartnerController extends Controller
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
				'maxLength'=>7,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	/**
	 * 合作伙伴 - 产业链 
	 * 
	 */
	public function actionIndex()
	{
        $this->render('industry');
	}

	
	/**
	 * 合作伙伴 - 生态链 
	 * 
	 */
	public function actionEcology()
	{
		$this->render('ecology');
	}
}