<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function index(){

        $data = array(
            'title' => "Login",
        );

		$this->load->view('Frontend/login', $data);
    }

    public function register(){

        $data = array(
            'title' => "Landing Page | Register",
        );

		$this->load->view('Frontend/register', $data);
    }

    public function auth(){
        $this->load->model("User_model", 'user');
        $_username = $this->input->post('username');
        $this->form_validation->set_rules('username', 'username', 'required',
        array(
            'required' => 'Field %s Harus diisi'
        )
        );

        $_password = $this->input->post('password');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[3]',
        array(
            'required' => 'Field %s Harus diisi',
            'min_length' => 'Field %s Harus Minimal 8 karakter'
        )
        );

        if ($this->form_validation->run() == FALSE){
            $data = array(
                'title' => "Landing Page | Login",
            );
            $this->session->set_flashdata("error", "Gagal login Periksa Kembali Field");
            redirect(base_url()."index.php/login",'refresh');
        }else{
            $row = $this->user->auth($_username, $_password);

            if(isset($row)){
                $this->session->set_userdata("IDUSER", $row->id);
                $this->session->set_userdata("NAMA", $row->nama);
                $this->session->set_userdata('USERNAME', $row->username);
                $this->session->set_userdata('ROLE', $row->role);
                $this->session->set_userdata('USER', $row);
                if($row->role == 'admin'){
                    $this->session->set_flashdata("success", "Berhasil login");
                    redirect(base_url()."index.php/dashboard/",'refresh');
                }else if($row->role == 'user'){
                    $this->session->set_flashdata("success", "Berhasil login");
                    redirect(base_url(),'refresh');
                }
            } else {
                $this->session->set_flashdata("error", "Account Tidak Ditemukan");
                redirect(base_url()."index.php/login",'refresh');
            }
        }
    }

    public function logout(){
        $this->session->unset_userdata("IDUSER");
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url(),'refresh');
    }

    public function registerAuth(){
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

        if ($this->form_validation->run() == FALSE){
           $data = array(
            'title' => 'Landing Page | Sing Up'
            );
            
            $this->load->view('FrontEnd/register', $data);
            redirect(base_url()."index.php/home/register",'refresh');
        }else{
            $data_user[] = $_nama;
            $data_user[] = $_username;
            $data_user[] = $_password;
            $data_user[] = $_email;
            $data_user[] = date('Y-m-d H:i:s');
            $data_user[] = date('Y-m-d H:i:s');
            $data_user[] = 1;
            $data_user[] = 'user';

            $this->user->register($data_user);
            $this->session->set_flashdata("success", "Berhasil Register Account");
            redirect(base_url()."index.php/login/",'refresh');
        }
    }

}


?>