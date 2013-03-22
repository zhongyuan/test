<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MyLinkPager extends CLinkPager{

	public function init()
	{
		if($this->nextPageLabel===null)
			$this->nextPageLabel=Yii::t('yii','Next &gt;');
		if($this->prevPageLabel===null)
			$this->prevPageLabel=Yii::t('yii','&lt Previous');
		if($this->firstPageLabel===null)
			$this->firstPageLabel=Yii::t('yii','&lt;&lt; First');
		if($this->lastPageLabel===null)
			$this->lastPageLabel=Yii::t('yii','Last &gt;&gt;');
		if(!isset($this->htmlOptions['id']))
			$this->htmlOptions['id']=$this->getId();
		if(!isset($this->htmlOptions['class']))
			$this->htmlOptions['class']='yiiPager';
             $this->header = null;
             $this->cssFile = Yii::app()->request->baseUrl.'/css/page.css';
	}

//	public function run()  //不用写run函数，直接继承父类CLinkPager
//	{
//		$this->registerClientScript();
//		$buttons=$this->createPageButtons();
//		if(empty($buttons))
//			return;
//		echo $this->header;
//		echo CHtml::tag('ul',$this->htmlOptions,implode("\n",$buttons));
//		echo $this->footer;
//	}

}




?>
