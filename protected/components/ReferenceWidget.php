<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ReferenceWidget extends CWidget{

    public $versions;
    public $cl_child;

    public function run(){

        $this->render('reference',array(
            'versions' => $this->versions,
            'cl_child' => $this->cl_child,
        ));

    }


}
