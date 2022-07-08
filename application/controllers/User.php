<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
   public function index(){
    $this->load->model('user_model','user');

    $data = array(
        'title' => "User | Dashboard",
        'list_data' => $this->user->getUser()
    );

    $this->load->view('Backend/layout/header.php', $data);
		$this->load->view('Backend/layout/navbar.php');
		$this->load->view('Backend/layout/sidebar.php');
		$this->load->view('Backend/user/index.php');
		$this->load->view('Backend/layout/footer.php');
    
   }

   public function create(){
    $this->load->model('user_model','user');

    $data = array(
        'title' => "Create User | Dashboard",
    );

    $this->load->view('Backend/layout/header.php', $data);
		$this->load->view('Backend/layout/navbar.php');
		$this->load->view('Backend/layout/sidebar.php');
		$this->load->view('Backend/user/create.php');
		$this->load->view('Backend/layout/footer.php');

    
   }
}