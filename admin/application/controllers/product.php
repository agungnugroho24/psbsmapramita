<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct() {
        parent::__construct();
		$this->load->model("allmod");
    }
    
    public function index(){
		if($this->session->userdata('logged_in')) {
		$session_data = $this->session->userdata('logged_in');
        $data['idus'] = $session_data['idam'];
        $data['nama_lengkap'] = $session_data['namal'];
        $data['produk'] = "active";
        $data['pdk'] = "active";
        //$data['footer_js'] = "dashboard";
		
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('produk/list');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    
}