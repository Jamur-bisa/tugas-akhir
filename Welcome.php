<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelku');

	}

	public function index()
	{
		$this->load->view("form_login");
	}

	public function aksi_login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$datapenunjuk = array(
			'user' => $user,
			'pass' => $pass,
		);

		$cek = count($this->modelku->getdata_khusus("duser", $datapenunjuk));

		if($cek > 0 ){
			$data_session = array(
				'nama' => $user,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);

			redirect(base_url()."index.php/Welcome/data_produk/");
		}else{
			redirect(base_url());
		}
	}

	public function data_produk(){
		if($this->session->userdata('status')=="login"){
		$dataproduk = $this->modelku->getdata("data_produk");
		$data = array(
			"datamu" =>$dataproduk
		);
		$this->load->view("home", $data);
	}else{
		redirect(base_url());
	}
	}

	public function daftar(){
		$this->load->view("form_daftar");
	}

	public function aksi_daftar(){
		$datainputan = array(
			'user' => $this->input->post('username'),
			'pass' => $this->input->post('password')
		);
		$this->modelku->masukkan('duser', $datainputan);
		redirect(base_url(), 'refresh');
	}

	public function baca_form(){
		$this->load->view('form_tambah');
	}

	public function tambah_data(){
		$datainputan = array(
			'no' => $this->input->post('no'),
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi')
		);
		$this->modelku->masukkan('data_produk', $datainputan);
		redirect(base_url()."index.php/Welcome/");
	}

	public function hapus_data($penunjuk){
		$datapenunjuk = array(
			'no' => $penunjuk
		);
		
		$this->modelku->hapus('data_produk', $datapenunjuk);
		redirect(base_url()."index.php/Welcome/");
	}

	public function ambil_database($penunjuk){
		$datapenunjuk = array(
			'no' => $penunjuk
		);

		
		$dataproduk = $this->modelku->getdata_khusus("data_produk", $datapenunjuk);
		$data = array(
			"datamu" => $dataproduk
		);
		
		$this->load->view("form_edit", $data);
	}

	public function update_data(){
		$datainputan = array(
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi')
		);
		
		$datapenunjuk= array(
			'no' => $this->input->post('no')
		);

		$dataproduk = $this->modelku->perbarui("data_produk", $datainputan, $datapenunjuk);
		redirect(base_url()."index.php/Welcome/");
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
