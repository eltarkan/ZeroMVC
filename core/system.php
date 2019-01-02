<?php
class system{

  protected $controller;
  protected $method;

  public function __construct(){
      $controller = "index";
      $method = "index";

      /*URL INSPECTOR*/
      if (isset($_GET['run'])) {

        $url = explode('/' ,
        filter_var(rtrim($_GET['run'],'/'),FILTER_SANITIZE_URL));

      }
      else {
        $url = "";
      }
      if (isset($url[0])) {

        /*CONTROLLER FINDER*/
        if (file_exists(CONTROLLERS_PATH."/".$url[0]."Controller.php")) {
          $this->controller = $url[0]."Controller";
          require_once CONTROLLERS_PATH."/".$url[0]."Controller.php";
          $this->controller = new $this->controller;
          array_shift($url);
          /*METHOD FINDER*/
          if (!isset($url[0])) {
            $this->method = "index";
            call_user_func_array([$this->controller,$this->method],$url);
          }
          else {
            if (method_exists($this->controller,$url[0])) {
              $this->method = $url[0];
              array_shift($url);
              call_user_func_array([$this->controller,$this->method],$url);
            }
            else {
              echo "Method yok";
            }
          }
        }
        else {
          echo "ARE YOU SEARCHING WRONG PAGE?";
        }

      }
      else {
        $this->controller = "indexController";
        require_once CONTROLLERS_PATH."/indexController.php";
        $this->controller = new $this->controller;
        indexController::index();

      }

  }

}


?>
