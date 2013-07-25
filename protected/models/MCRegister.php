<?php
class MCRegister {
	
	public static function getSafeQuestions()
	{
		return array(
			10=>"当地震发生时你在户外应怎样避震",
			20=>"地震被埋压的人员通常应当采取什么方法保存体力等待救援",
			30=>"当洪水来到，来不及转移时应该怎么办",
			40=>"当你靠马路右边行走，准备横过马路的时候，应该做好什么准备",
			50=>"楼道发生火灾，应该如何在第一时间选择正确的逃生路线"
		);
	}
	public static function getYears()
	{
		static $years = array();
		$maxYear = date("Y") - 15;
		$minYear = $maxYear - 30;
		for($i=$maxYear;$i>=$minYear;$i--){
			array_push($years,$i);
		}
		return $years;
	}
	
	public static function getMonths()
	{
		return array(1,2,3,4,5,6,7,8,9,10,11,12);
	}
	
	public static function getDays($month = 1)
	{
		
		/*
		$time = mktime(0,0,0,$month,date("d"),date("Y"));
		$dayCount = date("t",$time);*/
		
		static $days = array();
		$dayCount = 31;
		for($i=1;$i<=$dayCount;$i++){
			array_push($days,$i);
		}
		return $days;
	}
}
?>