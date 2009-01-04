<?php

 uses('L10n'); 

class AppController extends Controller {
	var $components = array('Session','RequestHandler','Cookie');
	var $helpers = array('Html','Form','Javascript');

	function beforeFilter(){
	    //$this->layout = 'json';
	    //$this->set("yang"=>"test");
	    if ($this->RequestHandler->isAjax()) {
	        $this->layout = 'json';
	        Configure::write('debug', 0);
	    }else{
	        //$this->layout = 'json';
	        //$this->__validateLoginStatus();
	    }
	}
	
	function __validateLoginStatus(){
	    if($this->action != 'login' && $this->action != 'logout'){
	        if($this->Session->check('User') == false){
	            $this->redirect(array('controller'=>'users','action'=>'login'));
	            $this->Session->setFlash('You need to login first');
            }
        } 
   }//end of function __validateLoginStatus

}
?>
