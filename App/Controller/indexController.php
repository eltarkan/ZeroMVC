<?php

class indexController extends controller
{

  function __construct()
  {
    // code...
  }

  public function index(){

    echo "index <br>";
    return View::vista('exampleFolder/example',['name' => "Tarkan"]);

  }
  public function list(){
    $this->model('User')->insert();

  }
}





?>
