<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class V extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
		
    }
    public function pg($id='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	       	$data['idpg'] = @$id;
	        if($id==3){
	        	$data['ps'] = "active";
	        	$data['dafu'] = "Prestasi";
				$data["variable"]= $this->qry->qResult('*', "tbl_data",array("data_id"=>$id));
	    	}
	    	else if($id==4){
	        	$data['dafu'] = "Organisasi Sekolah";
	        	$data['og'] = "active";
				$data["variable"]= $this->qry->qResult('*', "tbl_data",array("data_id"=>$id));
	    	}
	    	else if($id==5){
	        	$data['dafu'] = "Sarana Prasarana";
	        	$data['fs'] = "active";
				$data["variable"]=$this->qry->eQuery('select td.title, td.id_data, td.author, tm.id_parent AS data_id from tbl_data AS td inner join tbl_menu AS tm on td.data_id=tm.id where tm.id_parent="'.$id.'"');
	    	}
	        $data['footer_js'] = "dataTables";


			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('pages/listdefault');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function addpg($id='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	       	$data['idpg'] = @$id;
	        $data['footer_js'] = "validations";
	        if($id==3){
	        	$data['ps'] = "active";
	        	$data['headtit'] = "Add Prestasi";
	    	}
	    	else if($id==4){
	        	$data['headtit'] = "Add Organisasi Sekolah";
	        	$data['og'] = "active";
	    	}
	    	else if($id==5){
	        	$data['headtit'] = "Add Sarana Prasarana";
	        	$data['fs'] = "active";
	        	$data["ktg"]= $this->qry->qResult('*', "tbl_menu", array("id_parent"=>5));
	    	}

	    	if($id==5){
		    	$sbm = $this->input->post("judul");
		    	if($sbm){
		    		$dataArry = array(
		        			"title"=>$this->input->post("judul"),
		        			"content"=>$this->input->post("content"),
		        			"data_id"=>$this->input->post("kateg"),
		        			"author"=>"admin",
		        	);
		    		$this->qry->qtambah($dataArry, 'tbl_data');
		    	}
	   		 }
	   		 else{
	   		 	$sbm = $this->input->post("judul");
		    	if($sbm){
		    		$dataArry = array(
		        			"title"=>$this->input->post("judul"),
		        			"content"=>$this->input->post("content"),
		        			"data_id"=>$id,
		        			"author"=>"admin",
		        	);
		    		$this->qry->qtambah($dataArry, 'tbl_data');
		    	}
	   		 }
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('pages/pages');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function edit($idpg='', $id="")
    {
    
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	       	$data['idpg'] = @$id;
	        $data['footer_js'] = "validations";
	        $data["redit"]= $this->qry->qResult('*', "tbl_data",array("id_data"=>$idpg));
	        if($id==3){
	        	$data['ps'] = "active";
	        	$data['headtit'] = "Add Prestasi";
	    	}
	    	else if($id==4){
	        	$data['headtit'] = "Add Organisasi Sekolah";
	        	$data['og'] = "active";
	    	}
	    	$sbm = $this->input->post("judul");
	    	if($sbm){
	    		$dataArry = array(
	        			"title"=>$this->input->post("judul"),
	        			"content"=>$this->input->post("content"),
	        			"data_id"=>$id,
	        			"author"=>"admin",
	        	);
	    		$this->qry->qedit(array("id_data"=>$idpg), $dataArry, 'tbl_data');
	    		redirect("../v/pg/".$id);
	    	}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('pages/pages');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function hapus($id='', $idd="")
    {
    	$this->qry->qhapus('tbl_data', array("id_data"=>$id));
    	redirect("../v/pg/".$idd);
    }
}