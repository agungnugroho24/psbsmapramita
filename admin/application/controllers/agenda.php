<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['agenda'] = "active";
	        $data['footer_js'] = "dataTables";
			$data["variable"] = $this->qry->qResult('*', 'tbl_event', array("type"=>"agenda"), '', 'id DESC');
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('agenda/list');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    
    public function formeve($id='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['agenda'] = "active";
	        $data['footer_js'] = "validations";
	        if($id==""){
		        $data['headtit'] = "Add Agenda";
		        $sbm = $this->input->post("judul");
		        if($sbm){
		        	$dataArry = array(
		        			"title"=>$this->input->post("judul"),
		        			"posting_date"=>date("Y-m-d"),
		        			"content"=>$this->input->post("content"),
		        			"id_penulis"=>1,
		        			"type"=>"agenda"
		        	);
		        	$this->qry->qtambah($dataArry, 'tbl_event');
		        	redirect("../agenda");
		    	}
	        }
	        else{
	        	$data['redit'] = $this->qry->qResult('*', 'tbl_event', array('id'=>$id));
	        	$data['headtit'] = "Edit Agenda";
	        	$sbm = $this->input->post("judul");
		        if($sbm){
		        	$dataArry = array(
		        			"title"=>$this->input->post("judul"),
		        			"posting_date"=>date("Y-m-d"),
		        			"content"=>$this->input->post("content"),
		        			"id_penulis"=>1,
		        			"type"=>"agenda"
		        	);
		        	$this->qry->qedit(array("id"=>$id),$dataArry, 'tbl_event');
		        	redirect("../agenda");
		    	}
	        }
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('agenda/add');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function hapus($id='')
    {
    	$this->qry->qhapus('tbl_event', array("id"=>$id));
    	redirect("../agenda");
    }
}