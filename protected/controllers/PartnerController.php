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
		$mcPartner = new MCPartner();
		$dbLogo = $mcPartner->getParterList();
		
		$this->pageTitle = "COS官网 - 合作伙伴";
		$this->render('ecology',array(
                'logo' => array(
					'logo/cooperation_list_baidulianmeng.jpg',
					'logo/cooperation_list_baidu91.jpg',
					'logo/cooperation_list_gaode.jpg',
					'logo/cooperation_list_sina.jpg',
					'logo/cooperation_list_letv.jpg',
					'logo/cooperation_list_chuangyi.jpg',
					'logo/cooperation_list_zhongxing.jpg',
					'logo/cooperation_list_dazhihui.jpg',
					'logo/cooperation_list_dongyou.jpg',
					'logo/cooperation_list_payeco.jpg',
					'logo/cooperation_list_xunfei.jpg',
				),
				'dbLogo' => $dbLogo
        ));
    }


	/**
	 * 合作伙伴 - 生态链 
	 * 
	 */
//	public function actionEcology()
//	{
//
//	}
	
	
	/**
	 * 合伙伙伴 - 产业链详细页 
	 * 
     */
	public function actionDetail()
	{
		$news_id = $_GET['news_id']?$_GET['news_id']:null;
        if($news_id)
        {
            $mcNews = new MCNewsList($news_id);

            $news_info  = $mcNews->getNewsById();
			$this->render('detail',array(
                'news_info' => $news_info
            )); 
        }
	}
}