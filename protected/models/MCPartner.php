<?php

class MCPartner {
	
	public function __construct()
	{
		
	}
	
	/**
	 * 获取合作伙伴列表
	 * 
	 */
	public function getParterList()
	{
		$sql = "SELECT * FROM `partners`";
		$rows = Yii::app()->db->createCommand($sql)->queryAll();
		$dbRst = array();
		foreach($rows as $r){
			$r['logo_url'] = $this->_mapLogoUrl($r['logo']);
			$dbRst[] = $r;
		}
		return $dbRst;
	}
	
	private function _mapLogoUrl($name)
	{
		return "/uploads/partner/".$name;
	}

}
?>