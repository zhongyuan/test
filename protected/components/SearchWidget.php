<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class SearchWidget extends CWidget{

    public function run()
    {
        $action =  Yii::app()->getController()->getAction()->getId();

        if(in_array($action, array('index','editIndex'))){
            $type = MCApi::training;
            $cl_child = MCApi::getChildByType($type);
        }elseif(in_array($action, array('guide','editGuide'))){
            $type = MCApi::developer;
            $cl_child = MCApi::getChildByType($type);
        }elseif($action == 'reference'){
            $type = MCApi::reference;
            $class_list = new MCApi(MCApi::reference);
            $cl_child = $class_list->getChildById();
        }

        $this->render('search',array(
            'json_clchild' => json_encode($cl_child),
            'type' => $type,
        ));
    }
}

?>
