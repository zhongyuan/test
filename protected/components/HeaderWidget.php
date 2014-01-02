<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HeaderWidget extends CWidget{

    public function run(){

        $control =  Yii::app()->getController()->id;
        $action =  Yii::app()->getController()->getAction()->getId();

        $action = substr($action, 0,3);
        $controls = array('introduce','device','developer','about'); //有二级导航栏的  partner
        $this->render('header',array(
            'control' => $control,
            'action' => $action,
            'controls' => $controls,
        ));

    }

}


?>
