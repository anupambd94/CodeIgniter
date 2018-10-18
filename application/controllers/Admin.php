<?php
class Admin extends MY_Controller{
  public function index(){
    $query = $this->db->get('users');
    $this->form_validation->set_rules('uname','User Name','required|alpha');
    $this->form_validation->set_rules('pass','Password','required|max_length[12]|min_length[6]');
    if($this->form_validation->run()){
      $uname=$this->input->post('uname');
      $pass=$this->input->post('pass');
      $this->load->model('AdminLoginModel');
      if($this->AdminLoginModel->isvalidate($uname,$pass)){
        echo "Login successfull";
      }else{
        $this->load->view('Admin/login');
        echo "Login not successfull";
      }
    }else{
      $this->load->view('Admin/login');
      //echo validation_errors();
    }
  }

}

 ?>
