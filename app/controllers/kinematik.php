<?php

require_once('../vendor/smarty/smarty/libs/Smarty.class.php');

Class kinematik extends Controller {

   public function index(){
      
   }

   public function show(){

      //$this->view('user/show');
      //echo "Baum";

      $view = new Smarty();
      $view->setTemplateDir(__DIR__.'/../views/');
      // //$view->assign('CategorysData', $CategorysData);
      $view->display('index.smarty');

   }
}
?>