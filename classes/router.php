<?php

class router{
  private $sUrl;
  private $aUrlArgs;



     function __construct(){
     $this ->sUrl = $_SERVER['REQUEST_URI'];
    $this->explodeUrl();
  }

  private function explodeUrl(){

    $this->aUrlArgs = explode("/",$this->sUrl);

    foreach($this->aUrlArgs as $key=>$value){
          if($value==='') {
               unset($this->aUrlArgs[$key]) ;
          }
     }
}

     public function getUrlArgs(){
          return $this->aUrlArgs;
     }
}








 ?>
