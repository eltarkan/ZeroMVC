<?php

  class controller{



    public function model($file){
        if (file_exists(MODELS_PATH."/".$file.".php")) {
          require_once MODELS_PATH."/".$file.".php";
          if (class_exists($file)) {
            return new $file;
          }
          else {
            exit("MISSING MODEL'S CLASS");
          }
        }
        else {

          echo "WE DIDNT FOUND ANY MODEL FILE LIKE ==> ".$file;
        }
    }

  }



?>
