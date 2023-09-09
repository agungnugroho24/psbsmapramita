<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['dg'] = "active";
	        $data['lg'] = "active";
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
    public function dataguru($hapus='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['dg'] = "active";
	        $data['lg'] = "active";
	        $data['footer_js'] = "dataTables";
			$data['rtampil'] = $this->qry->qResult('*', "guru");
			if($hapus!=""){
				$this->qry->qhapus('guru', array("idguru"=>$hapus));
				redirect("../guru/dataguru");
			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('guru/listguru');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function matpel($hapus='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['dg'] = "active";
	        $data['mp'] = "active";
	        $data['footer_js'] = "dataTables";
			$data['rtampil'] = $this->qry->qResult('*', "matpel","","","matpel ASC");
			if($hapus!=""){
				$this->qry->qhapus('matpel', array("idmatpel"=>$hapus));
				redirect("../guru/matpel");
			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('guru/listmatpel');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function matpelform($edit='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['dg'] = "active";
	        $data['mp'] = "active";
	        $data['footer_js'] = "validations";
			
			if($edit!=""){
				$data['redit'] = $this->qry->qResult('*', "matpel",array("idmatpel"=>$edit));
				$sbm = $this->input->post("judul");
	        	if($sbm){
	        		$dataArry = array("matpel"=>$this->input->post("judul"));
	        		$this->qry->qedit(array("idmatpel"=>$edit),$dataArry, 'matpel');
	        		redirect("../guru/matpel");
	        	}
			}
			else{
	        	$data['headtit'] = "Add Matpel";
	        	$sbm = $this->input->post("judul");
	        	if($sbm){
	        		$dataArry = array("matpel"=>$this->input->post("judul"));
	        		$this->qry->qtambah($dataArry, 'matpel');
	        		redirect("../guru/matpel");
	        	}
			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('guru/matpeladd');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function addguru($edit='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['dg'] = "active";
	        $data['lg'] = "active";
	        $data['footer_js'] = "validations";
	        $data['headtit'] = "Tambah Guru";
	        $data['datajenjang'] = $this->qry->qResult('*', "matpel");
	        

			if($edit==""){
				$submit = $this->input->post("judul");
				if ($submit) {
					$dataArry = array(
						"nama_gurustaff"=>$this->input->post("judul"),
						"telepon"=>$this->input->post("tlp"),
						"email"=>$this->input->post("email"),
						"id_mapel"=>$this->input->post("jenjangs"),
						"jenkel"=>$this->input->post("jk"),
						"status_kawin"=>$this->input->post("status_kawin"),
						"posisi"=>$this->input->post("posisi"),
					);
					$this->qry->qtambah($dataArry, 'guru');
					redirect("../guru/dataguru");
				}
			}
			else{ //Jika Edit
				 $data['redit'] = $this->qry->qResult('*', "guru", array("idguru"=>$edit));
				$submit = $this->input->post("judul");
				if ($submit) {
					$dataArry = array(
						"nama_gurustaff"=>$this->input->post("judul"),
						"telepon"=>$this->input->post("tlp"),
						"email"=>$this->input->post("email"),
						"id_mapel"=>$this->input->post("jenjangs"),
						"jenkel"=>$this->input->post("jk"),
						"status_kawin"=>$this->input->post("status_kawin"),
						"posisi"=>$this->input->post("posisi"),
					);
					$this->qry->qedit(array("idguru"=>$edit), $dataArry, 'guru');
					redirect("../guru/dataguru");
				}
			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('guru/guruadd');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function addjenjang($edit='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['dg'] = "active";
	        $data['jj'] = "active";
	        $data['footer_js'] = "validations";
			$submit = $this->input->post("judul");
			if($edit==""){
	        	$data['headtit'] = "Tambah Jenjang Pendidikan";
				if($submit){
					$dataArry = array("jenjang"=>$this->input->post("judul"), "deskripsi"=>$this->input->post("content"));
					$this->qry->qtambah($dataArry, 'jenjang_pendidikan');
				}
			}
			else{
				$data['redit'] = $this->qry->qResult('*', "jenjang_pendidikan", array("idjenjang"=>$edit));
				$data['headtit'] = "Edit Jenjang Pendidikan";
				if($submit){
					$dataArry = array("jenjang"=>$this->input->post("judul"), "deskripsi"=>$this->input->post("content"));
					$this->qry->qedit(array("idjenjang"=>$edit), $dataArry, 'jenjang_pendidikan');
					redirect("../guru/jenjang/");
				}	
			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('guru/jenjangadd');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function jenjang($hapus='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['jj'] = "active";
	        $data['footer_js'] = "dataTables";
			$data["variable"] = $this->qry->qResult('*', "jenjang_pendidikan");
			if($hapus!=""){
				$this->qry->qhapus('jenjang_pendidikan', array("idjenjang"=>$hapus));
				redirect("../guru/jenjang");
			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('guru/listjenjang');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    
}