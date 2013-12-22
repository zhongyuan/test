<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class DropmenuWidget extends CWidget{

    public $view_data;


    public function run(){

        $this->render('dropmenu',array(
            'datahtml' => $this->view_data['dataHtml'],
            'first_id' => $this->view_data['first_id'],
        ));

    }


}

