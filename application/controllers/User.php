<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
   public function index(){
    $this->load->model('user_model','user');

    $data = array(
        'title' => "User | Dashboard",
        'list_data' => $this->user->getUser()
    );

    $this->load->view('Backend/layout/header', $data);
		$this->load->view('Backend/layout/navbar');
		$this->load->view('Backend/layout/sidebar');
		$this->load->view('Backend/user/index');
		$this->load->view('Backend/layout/footer');
    
   }

   public function create(){
    $this->load->model('user_model','user');

    $data = array(
        'title' => "Create User | Dashboard",
    );

    $this->load->view('Backend/layout/header', $data);
		$this->load->view('Backend/layout/navbar');
		$this->load->view('Backend/layout/sidebar');
		$this->load->view('Backend/user/create');
		$this->load->view('Backend/layout/footer');
   }

   public function save(){
      $this->load->model("User_model", 'user');

      $_username = $this->input->post('username');
      $this->form_validation->set_rules('username', 'username', 'required|is_unique[user.username]',
      array(
          'required' => 'Field %s Harus diisi',
          'is_unique' => 'Username '.$_username.' Ini sudah ada!!'
      )
      );
      
      $_password = $this->input->post('password');
      $this->form_validation->set_rules('password', 'password', 'required|min_length[8]',
      array(
          'required' => 'Field %s Harus diisi',
          'min_length' => 'Field %s Harus Minimal 8 karakter'
      )
      );
      $_nama = $this->input->post('nama');
      $this->form_validation->set_rules('nama', 'nama', 'required|min_length[8]',
      array(
          'required' => 'Field %s Harus diisi',
          'min_length' => 'Field %s Harus Minimal 8 karakter'
      )
      );
      $_email = $this->input->post('email');
      $this->form_validation->set_rules('email', 'email', 'required|min_length[8]',
      array(
          'required' => 'Field %s Harus diisi',
          'min_length' => 'Field %s Harus Minimal 8 karakter'
      )
      );

      $_role = $this->input->post('role');
      $this->form_validation->set_rules('role', 'role', 'required',
      array(
          'required' => 'Field %s Harus diisi'
      )
      );

      if ($this->form_validation->run() == FALSE){
          $this->load->model('user_model','user');

          $data = array(
              'title' => "Create User | Dashboard",
          );
          
          $this->session->set_flashdata("error", "Gagal Tambah Account");

          $this->load->view('Backend/layout/header', $data);
          $this->load->view('Backend/layout/navbar');
          $this->load->view('Backend/layout/sidebar');
          $this->load->view('Backend/user/create');
          $this->load->view('Backend/layout/footer');
      }else{
          $data_user[] = $_nama;
          $data_user[] = $_username;
          $data_user[] = $_password;
          $data_user[] = $_email;
          $data_user[] = date('Y-m-d H:i:s');
          $data_user[] = date('Y-m-d H:i:s');
          $data_user[] = 1;
          $data_user[] = $_role;

          $this->user->register($data_user);
          $this->session->set_flashdata("success", "Berhasil Register Account");
          redirect(base_url()."index.php/user/",'refresh');
      }
   }

   public function benned(){
      $_id = $this->input->get('id');
      $this->load->model("User_model", 'user');

      $data_user[] = 0;
      $data_user[] = $_id;

      $this->user->benned($data_user);
      $this->session->set_flashdata("success", "Berhasil Benned Account");

      redirect(base_url().'index.php/user/', 'refresh');
   }

   public function unBenned(){
      $_id = $this->input->get('id');
      $this->load->model("User_model", 'user');

      $data_user[] = 1;
      $data_user[] = $_id;

      $this->user->benned($data_user);
      $this->session->set_flashdata("success", "Berhasil Berhasil unbenned Account");

      redirect(base_url().'index.php/user/', 'refresh');
   }

   public function detail(){
      $_id = $this->input->get("id");
      $this->load->model("User_model", "user");

      $data = array(
          'title' => 'Detail User Wisata',
          'user' => $this->user->findById($_id)
      );

      $this->load->view('Backend/layout/header', $data);
      $this->load->view('Backend/layout/navbar');
      $this->load->view('Backend/layout/sidebar');
      $this->load->view('Backend/user/detail');
      $this->load->view('Backend/layout/footer');
   }
}