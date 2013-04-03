<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class AppWidget extends CWidget {

    public function run()
    {
        $action =  Yii::app()->getController()->getAction()->getId();

        $this->render('app',array(
            'action' => $action,
        ));
    }

}







?>
