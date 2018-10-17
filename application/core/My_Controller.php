<?php

class My_Controller extends CI_Controller{

  public function__construct(){
    if(!$this->isauthorized()){ return redirect 'home'; }
  }
}

?>
