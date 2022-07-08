<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller{

    public function index(){
        $this->load->model("Komentar_model", 'komentar');

        $data = array(
            'title' => 'Dashboard | Komentar',
            'list_komentar' => $this->komentar->getAll()
        );

        $this->load->view('Backend/layout/header', $data);
		$this->load->view('Backend/layout/navbar');
		$this->load->view('Backend/layout/sidebar');
		$this->load->view('Backend/komentar/index');
		$this->load->view('Backend/layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("Komentar_model", 'komentar');

        $this->komentar->delete($_id);
        $this->session->set_flashdata("success", "Berhasil Delete Data");

        redirect(base_url().'index.php/komentar/', 'refresh');
    }
}