<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['pgs'] = "active";
	        $data['footer_js'] = "dataTables";
			$data["variable"]=$this->qry->eQuery('select td.title, td.id_data, td.data_id,td.author from tbl_data AS td inner join tbl_menu AS tm on td.data_id=tm.id where tm.aktif="act"');
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('pages/list');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function hapus($id='')
    {
    	$this->qry->qhapus('tbl_data', array("id_data"=>$id));
    	redirect("../pages");
    }
    public function pagesform($edit='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['pgs'] = "active";
	        $data['footer_js'] = "validations";
			$data["variable"]=$this->qry->qResult('*', "tbl_data");
			$data["ktg"]=$this->qry->qResult('*', "tbl_menu", array("aktif"=>"act"));
			if($edit!=""){
				$data['redit'] = $this->qry->qResult('*', 'tbl_data', array('id_data'=>$edit));
	        	$data['headtit'] = "Edit Pages";
	        	$sbm = $this->input->post("judul");
	        	if ($sbm) {
	        		$dataArry = array(
	        			"title"=>$this->input->post("judul"),
	        			"content"=>$this->input->post("content"),
	        			"data_id"=>$this->input->post("kateg"),
	        			"author"=>"admin",
	        		);
	        		$this->qry->qedit(array("id_data"=>$edit),$dataArry, 'tbl_data');
	        		redirect("../pages");
	        	}
				
			}
			else{

			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('pages/addpages');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
}