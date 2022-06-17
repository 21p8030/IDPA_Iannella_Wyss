<?php

use Mathematicator\Vizualizator\Renderer;
use Mathematicator\Calculator\Calculator;

// require_once('../vendor/smarty/smarty/libs/Smarty.class.php');
require_once('../vendor/autoload.php');
// require_once('../vendor/mathematicator-core/vizualizator/src/Renderer.php');

Class grFunktionen extends Controller {


   public function index(){

      $view = new Smarty();
      $view->setTemplateDir(__DIR__.'/../views/');
      $view->assign('title', "Gebrochen Rationale Funktionen");
      $view->display('index.smarty');

   }
}
?>