<?php
class Admin extends MY_Controller{
  public function index(){
    $this->load->library('form_validation');
    $query = $this->db->get('users');
    $this->form_validation->set_rules('uname','User Name','required|is_unique[users.username]|alpha_numeric');
    $this->form_validation->set_rules('pass','Password','required|max_length[12]|min_length[6]');
    if($this->form_validation->run()){
      echo "validation Successfull";
    }else{
      $this->load->view('Users/article_list');
      //echo validation_errors();
    }
  }

}

 ?>
