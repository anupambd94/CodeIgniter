<?php
class Users extends MY_Controller{
public function index(){
  $this->load->helper('url');
  $this->load->view('Users/article_list');
}

}

 ?>
