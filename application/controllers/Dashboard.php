<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{

		parent::__construct();
		$this->load->library("session");
		$this->sessionku();

	}
	function sessionku ()

	{
		$berhasil=$this->session->userdata('login');
		if (!isset($berhasil) || $berhasil !=true )
		{

			redirect('../Login');

		}
	}
	

	public function index()
	{
		$data["judul"] = "PUSAT LABORATORIUM| SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer', $data);
	}


}