<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_controller {
    function __construct(){
		parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_data');
	}
    
    public function index(){
        // get user input
        $this->load->view('templates/header-login');
        $this->load->view('loginpage');
        $this->load->view('templates/footer');
    }

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Home"));
 
		}else{
            echo "<script>alert('Username dan password salah!');</script>";
			// redirect(base_url("Login"));
			$this->load->view('templates/header-login');
			$this->load->view('loginpage');
			$this->load->view('templates/footer');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Home'));
	}

	function daftar(){
		$this->load->view('templates/header-login');
        $this->load->view('registerpage');
        $this->load->view('templates/footer');
	}
 
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
		$data = array(
			'username' => $username,
			'password' => md5($password),
			'nama' => $nama,
			'tgl_lahir' => $tgl_lahir
			);
		$this->m_data->input_data($data,'user');
		redirect('login/index');
	}
}

?>