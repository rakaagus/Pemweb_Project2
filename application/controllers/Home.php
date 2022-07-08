<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model("JenisWisata_model", 'jns');
		$this->load->model("Tmpwisata_model",'wisata');
		
        $data = array(
            'title' => 'Landing Page',
			'list_category' => $this->jns->getAll(),
			'cwisata' => $this->wisata->getAll()
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
		$this->load->model('Rating_model', 'rating');
		$this->load->model('Komentar_model', 'komentar');

		$data = array(
            'title' => 'Landing Page | Detail Destinasi',
			'wisata' => $this->wisata->findById($_id),
			'list_category' => $this->jns->getAll(),
			'list_rating' => $this->rating->getAll(),
			'list_comentar' => $this->komentar->getAll(),
			'list_wisata_related' => $this->wisata->getAll()
        );
        
		$this->load->view('FrontEnd/layouts/header', $data);
		$this->load->view('FrontEnd/layouts/navbar');
        $this->load->view('FrontEnd/detail-destination');
		$this->load->view('FrontEnd/layouts/footer');
	}
	public function makeComment(){
		$this->load->model("Komentar_model", "komentar");

		$_user = $this->input->post('user');
		$_wisata = $this->input->post('wisata');
		$_rating = $this->input->post('rating');
		$_isi = $this->input->post('isi');
		$this->form_validation->set_rules('isi', 'isi', 'required',
        array(
            'required' => 'Field %s Harus diisi'
        )
        );

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata("error", "Field Comment Tidak Boleh kosong");
			redirect(base_url().'index.php/home/detaildestination?id='.$_wisata,'refresh');
		}else{
			$data_comment[] = date('Y-m-d');
			$data_comment[] = $_isi;
			$data_comment[] = $_user;
			$data_comment[] = $_rating;
			$data_comment[] = $_wisata;
			$this->komentar->saveComment($data_comment);

			$this->session->set_flashdata("success", "Berhasil Membuat Comment");
			redirect(base_url().'index.php/wisata/detaildestination?id='.$_wisata,'refresh');
		}
	}
	public function category(){
		$_namaJenis = $this->input->get("nama_jenis");

		$this->load->model('TmpWisata_model', 'wisata');
		$this->load->model("JenisWisata_model", 'jns');

		$data = array(
            'title' => 'Landing Page | Destinasi',
			'list_data' => $this->wisata->category($_namaJenis),
			'list_category' => $this->jns->getAll()
        );
        
		$this->load->view('FrontEnd/layouts/header', $data);
		$this->load->view('FrontEnd/layouts/navbar');
        $this->load->view('FrontEnd/destination');
		$this->load->view('FrontEnd/layouts/footer');
	}
}
