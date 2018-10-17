<?php
class Admin extends MY_Controller{
  public function index(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('uname','User Name','required|alpha');
    $this->form_validation->set_rules('pass','Password','required|max_length[12]|min_length[6]');
    if($this->form_validation->run()){
      echo "validation Successfull";
    }else{
      echo validation_errors();
    }
  }

}

 ?>
