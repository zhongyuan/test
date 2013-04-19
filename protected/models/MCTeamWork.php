<?php
class MCTeamWork 
{

   

	private $_tblWork = 'teamWork';
	private $_tblTeam = 'team';
	private $_tblTeamMember = 'teamMember';
	
	
	public function __construct() {
        
    }
	
	//========获取参赛获奖作品名单==============
	public function getRewardWorks($rewardCategory)
	{
		$sql = "SELECT t1.work_name,t2.team_id,t2.team_name,t1.reward_category FROM ".$this->_tblWork." as t1";
		$sql.= " LEFT JOIN ".$this->_tblTeam." AS t2 ON t1.team_id=t2.team_id";
		$sql.= " WHERE reward_category IN($rewardCategory)";
		
		return Yii::app()->db->createCommand($sql)->queryAll();
		
	}


}





?>
