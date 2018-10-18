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
      $user_id = $this->AdminLoginModel->isvalidate($uname,$pass);
      if($user_id){
        $this->session->set_userdata('id',$user_id);
        return redirect('Admin/welcome');
      }else{
        return redirect('Admin/signin');
      }
    }else{
      $this->load->view('Admin/login');
      //echo validation_errors();
    }
  }

  public function welcome(){
    $this->load->model('AdminLoginModel','ALM');
    $articles=$this->ALM->articleList();
    $this->load->view('Admin/dashboard',['articles'=>$articles]);
  }

  public function signin(){
    $this->load->view('Admin/login');
  }


}

 ?>
