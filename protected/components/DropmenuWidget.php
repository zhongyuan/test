<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class DropmenuWidget extends CWidget{

    public $type;
    
    public function run(){

        $mcApi = new MCApi();
        $type = $this->type ? $this->type:1;
		$data = $mcApi->getTree($this->type);
		$viewData = array(
			'data' => $data,
			'switchUrl'=>$switchUrl,
			'editable' => 0,
		);
        
        $viewData['dataHtml'] = $this->_generateTreeHtml($data);
        $viewData['first_id'] = $data[0]['file'];

        //搜索参数处理
        $file_id = intval($_GET['id']);
        $file_path = $mcApi->getFilePathById($file_id);
        if($file_path && file_exists(dirname(dirname(dirname(__FILE__))).$file_path)){
            $viewData['first_id'] = $file_path;
        }

        $this->render('dropmenu',array(
            'datahtml' => $viewData['dataHtml'],
            'first_id' => $viewData['first_id'],
        ));

    }
	/**
	 * 生成结点树对应的HTML
	 * @param undefined $data
	 *
	 */
	private function _generateTreeHtml($data,$active=TRUE,$level = 0)
	{
		$level++;
//		$idx = 0;
		$html = "<ul>";
		foreach($data as $index=>$item){
//			$idx++;
//			if($idx == 1 && $active){
//				$class = "active";
//			}else{
//				$class = "inactive";
//			}
			$topclass = $level == 1 ? "class='top'" : "";
            $bg_color = $level == 1 ? 'top_bg' : "";
			$html.="<li {$topclass}><a class=\"".$class."\" bg_color=\"".$bg_color."\" id=\"f_".$item['id']."\" href=\"#\" name=\"".$item['file']."\">".$item['name']."</a>";
			if($item['isParent']){
				$html.=$this->_generateTreeHtml($item['children'],FALSE,$level);//子节点初始化时无需激活
			}
			$html.="</li>";
		}
		$html.="</ul>";
		return $html;
	}

}

