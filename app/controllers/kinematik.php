<?php

use Mathematicator\Vizualizator\Renderer;
use Mathematicator\Calculator\Calculator;

// require_once('../vendor/smarty/smarty/libs/Smarty.class.php');
require_once('../vendor/autoload.php');
// require_once('../vendor/mathematicator-core/vizualizator/src/Renderer.php');

Class kinematik extends Controller {

   public function index(){
      $view = new Smarty();
      $view->setTemplateDir(__DIR__.'/../views/');
      $view->assign('title', "Kinematik");
      $view->display('ggb.smarty');
   }
   public function ggb(){
      $view = new Smarty();
      $view->setTemplateDir(__DIR__.'/../views/');
      $view->assign('title', "Kinematik");
      $view->display('ggb.smarty');
   }
   public function gbb(){
      $view = new Smarty();
      $view->setTemplateDir(__DIR__.'/../views/');
      $view->assign('title', "Kinematik");
      $view->display('gbb.smarty');
   }
   public function ff(){
      $view = new Smarty();
      $view->setTemplateDir(__DIR__.'/../views/');
      $view->assign('title', "Kinematik");
      $view->display('ff.smarty');
   }
   public function sw(){
      $view = new Smarty();
      $view->setTemplateDir(__DIR__.'/../views/');
      $view->assign('title', "Kinematik");
      $view->display('sw.smarty');
   }
   public function schw(){
      $view = new Smarty();
      $view->setTemplateDir(__DIR__.'/../views/');
      $view->assign('title', "Kinematik");
      $view->display('schw.smarty');
   }
   public function kb(){
      $view = new Smarty();
      $view->setTemplateDir(__DIR__.'/../views/');
      $view->assign('title', "Kinematik");
      $view->display('kb.smarty');
   }

   public function show(){

     

   }

   public function integral_test(){
      set_time_limit(600);
      include("integral.php");
      //new function_diagram(horizental dimention, vertical dimention, x start, x end,  background color_red_, background color_green_, 
      //						background color_blue_,  arc color_red_, arc color_green_, arc color_blue_, function, 
      //						calculation step, parameter to determine grid drawing);
      //---- a test, gets these parameters from index.html as a form . 
      
      if($_POST){
         $show = new integral_diagram($_POST["x"],$_POST["y"], $_POST["x_start"],$_POST["x_end"], $_POST["br"],$_POST["bg"],$_POST["bb"],$_POST["ar"],$_POST["ag"],$_POST["ab"],$_POST["eqx"],$_POST["step"],$_POST["hasgrid"]);
         //$show = new integral_diagram(600,600, 0,200, 0,0,0,255,255,255,"sqer(x)",".01",true);
         //---- call draw mwthod of created object to get the diagram as a jbg file.
         var_dump($show->draw());
         $show->draw();	
      } else {

         $this->view('integral');
      }

   }

   public function Gleichförmige_geradlinige_Bewegung(){
      if($_POST) {

      }  else {
         $view = new Smarty();
         $view->setTemplateDir(__DIR__.'/../views/');
         $view->assign('title', "Gleichförmige_geradlinige_Bewegung");
         $view->display('index.smarty');
      }
   }

   public function beweg($v = null, $t = null, $s = null){
      if(is_null($v)){
         $v = $s / $t;
         return $v;
      }
      if(is_null($s)){
         $s = $v * $t;
         return $s;
      }
      if(is_null($t)){
         $t = $s / $v;
         return $t;
      }
   }

   public function integral() {
      // $solver = new IntegralSolver(/* some dependencies */);
      // $solver->process('x + 1');
      $calculator = new Calculator(/* some dependencies */);

      echo $calculator->calculateString('(5 + 3) * (2 / (7 + 3))'); // \frac{8}{5}
      
      $renderer = new Renderer;
      $request = $renderer->createRequest();

      $request->addLine(10, 10, 35, 70);
      $request->addLine(35, 70, 70, 35);

      // // Render specific format:

      echo $request->render(Renderer::FORMAT_PNG);
      echo $request->render(Renderer::FORMAT_JPG);
      echo $request->render(Renderer::FORMAT_SVG);

      echo $request;
   }


   public function test($func, $start, $end) {
      $res = 0;
      for ($i = $end-$start; $i > 0; $i--) {
         $temp = str_replace("x", $i, $func);
         $res += Math.calculate($temp);
      }
   }


   public function newton($func, $func_ableitung, $itervall, $X0) {
      set_time_limit(20);
      $Xn = $X0;
      while(true){
         $X_temp = $Xn;
         $Xn = $Xn - $this->funktions_Rechner($func, $Xn) / $this->funktions_Rechner($func_ableitung, $Xn);
         if($this->check_float($X_temp, $Xn)){ // Vergleicht die beiden miteinander wenn diese genug ähnlich sind wird true zurückgegeben
            return $Xn;
         }
      }

   }



   public function funktions_Rechner($func, $x){}
   public function check_float($a, $b){}
}
?>