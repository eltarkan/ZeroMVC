<?php
class view{

  public function __construct(){

  }

  static function vista($file, $bag = []){
    if (file_exists(VIEWS_PATH."/".$file.".vista.php")) {
      ob_start();
      require_once VIEWS_PATH."/".$file.".vista.php";
      ob_flush();
    }
    else {
      exit("WE DIDNT FIND ZERO FILE");
    }
  }


}

?>
