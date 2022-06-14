<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_crud_admin');
		$this->load->library("session");
	}
	
	public function index(){
		$this->load->view('login');
	}
	
	function sessionku ()

		{
			$berhasil=$this->session->userdata('login');
			if (!isset($berhasil) || $berhasil !=true )
			{
				redirect('Home');
			}
		}



  

	function cek(){
			$hsl=$this->M_crud_admin->cek();
			if ($hsl->num_rows() == 1)
			{//jika salah satu pasword ada di di dalam table 
					$ok=$hsl->row();
					$data=array(
						'id_admin'=>$ok->id_admin,
						'username'=>$ok->username,
						'password'=>$ok->password,
						'level'=>$ok->level,
						'login'=>true
						);	
					$this->session->set_userdata($data);
					
					if ($ok->level=='1') {
						redirect('../Dashboard');
					}else if ($ok->level=='2') {
						redirect('../Dashboard');
					}
			}else{

				echo'<script type="text/javascript">
						//<![CDATA[
						alert("password salah silah kan login kembali ");
						window.location="../login";
						//]]>
					</script>';

			}
		}

		

	function logout()
		{
			unset($_SESSION['login']);
			redirect('../Login');
			$this->keluar();
		}
		
		function keluar(){
			$this->load->view('home');
		}	
}