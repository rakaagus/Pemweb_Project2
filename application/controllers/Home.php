<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model("JenisWisata_model", 'jns');
        $data = array(
            'title' => 'Landing Page',
			'list_category' => $this->jns->getAll()
        );
        
		$this->load->view('FrontEnd/layouts/header', $data);
		$this->load->view('FrontEnd/layouts/navbar');
        $this->load->view('FrontEnd/home');
		$this->load->view('FrontEnd/layouts/footer');
	}
	public function destination(){
		$this->load->model('TmpWisata_model', 'wisata');
		$this->load->model("JenisWisata_model", 'jns');
		$data = array(
            'title' => 'Landing Page | Destinasi',
			'list_data' => $this->wisata->getAll(),
			'list_category' => $this->jns->getAll()
        );
        
		$this->load->view('FrontEnd/layouts/header', $data);
		$this->load->view('FrontEnd/layouts/navbar');
        $this->load->view('FrontEnd/destination');
		$this->load->view('FrontEnd/layouts/footer');
	}
	public function detailDestination(){
		$_id = $this->input->get("id");
		$this->load->model("JenisWisata_model", 'jns');
        $this->load->model("TmpWisata_model", "wisata");

		$data = array(
            'title' => 'Landing Page | Detail Destinasi',
			'wisata' => $this->wisata->findById($_id),
			'list_category' => $this->jns->getAll()
        );
        
		$this->load->view('FrontEnd/layouts/header', $data);
		$this->load->view('FrontEnd/layouts/navbar');
        $this->load->view('FrontEnd/detail-destination');
		$this->load->view('FrontEnd/layouts/footer');
	}
	public function register(){
		$data = array(
            'title' => 'Landing Page | Sing Up'
        );
        
        $this->load->view('FrontEnd/register', $data);
	}
}
