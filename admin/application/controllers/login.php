<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata('logged_in')) {
			redirect('../home');
		}
		else{
			$this->load->view('login');
		}
	}
	function checklogin(){
	session_start();
		if(@$_SESSION['account_id']!=""){
			$session=array (
					'account_id'=>@$_SESSION['account_id'],
					'username'=>@$_SESSION['username'],
					'login'=>1,
					'privileges'=>@$_SESSION['privileges'],
					'status'=>@$_SESSION['status'],
				);
				$this->session->set_userdata('logged_in', $session);
				redirect('../home');
			}
		else{
			redirect('../');
		}
	}
	function offlog($akses="")
	{
		session_start();
		session_destroy();
		$this->session->unset_userdata('logged_in');
		if($akses==""){
			redirect(base_url());
		}
		else{
			if($akses=="artikel"){
				redirect("http://artikel.beritash.com");
			}
			else{
				redirect(base_url());
			}
		}
	}
	function proses(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$whr = array("username"=> $username,"password"=> md5($password));
		$ada = $this->qry->qResult('*', "admin", $whr);
		if($ada){
			
			$session=array (
				'idam'=>$ada[0]["idadm"],
				'namal'=>$ada[0]["nama"],
			);
			$this->session->set_userdata('logged_in', $session);
			redirect('../home');
		}
		else{
			$this->session->set_flashdata('confirm', $this->allmod->notifikasis('Gagal',"Salah Nama pengguna/Kata sandi"));
			redirect('../');
		}

	}
}
