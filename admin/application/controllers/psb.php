<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Psb extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
		
    }
   
	public function psbs($page='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['page'] = $page;
	        $data['psb'] = "active";
	        $data['footer_js'] = "dataTables";
	        $data['tampil'] = $this->qry->qResult('*', 'tb_psb_data', array('idpsb'=>$page));
	        if($page==1){
	        	$data['lpTPQ'] = "active";
	        	$data['rdt'] = "PSB TPQ";
	    	}
	    	else if($page==2){
	        	$data['lpTK'] = "active";
	        	$data['rdt'] = "PSB TK";
	    	}
	    	else if($page==3){
	        	$data['lpSD'] = "active";
	        	$data['rdt'] = "PSB SD";
	    	}
	    	else if($page==4){
	        	$data['lpSMP'] = "active";
	        	$data['rdt'] = "PSB SMP";
	    	}
	    	else if($page==5){
	        	$data['lpSMK'] = "active";
	        	$data['rdt'] = "PSB SMA";
	    	}
		
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('psb/listpsb');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
	}
	public function detail($id='',$page="")
	{
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['psb'] = "active";
	        $data['page'] = $page;
	        if($page==1){
	        	$data['lpTPQ'] = "active";
	        	$data['rdt'] = "PSB TPQ";
	    	}
	    	else if($page==2){
	        	$data['lpTK'] = "active";
	        	$data['rdt'] = "PSB TK";
	    	}
	    	else if($page==3){
	        	$data['lpSD'] = "active";
	        	$data['rdt'] = "PSB SD";
	    	}
	    	else if($page==4){
	        	$data['lpSMP'] = "active";
	        	$data['rdt'] = "PSB SMP";
	    	}
	    	else if($page==5){
	        	$data['lpSMK'] = "active";
	        	$data['rdt'] = "PSB SMA";
	    	}
	        $data['footer_js'] = "dataTables";

	        $data['redit'] = $this->qry->qResult('*', "tb_psb_data", array("nomor"=>$id));
			
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('psb/psbdetail');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
	}
    public function setting(){
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['psb'] = "active";
	        $data['setting'] = "active";
	        $data['footer_js'] = "dataTables";

	        $data['variable'] = $this->qry->qResult('*', "setting_psb");
			
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('psb/settingpsb');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function popups($value='', $id="")
    {
    	$data["tampil"] = $this->qry->qResult('*', 'pembayaran', array("gelombang"=>$value));
    	$data["redit"] = $this->qry->qResult('*', 'tb_psb_data', array("nomor"=>$id));
    	$this->load->view('psb/psbpopup', $data);
    }
    public function aksi($id=""){
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['psb'] = "active";
	        $data['setting'] = "active";
	        $data['footer_js'] = "validations";
	        $data['headtit'] = "Setting ";

	        $data['redit'] = $this->qry->qResult('*', "setting_psb", array("idsetpsb"=>$id));
	        $sbm = $this->input->post("submit");
	        if($sbm){

	        	//Gelombang 1
		       	$b = explode("-", $this->input->post("reservation"));
	            $bx = explode("/", @$b[0]);
	            $bxx = explode("/", @$b[1]);
	            $bc = trim(@$bx[2])."-".trim(@$bx[0])."-".trim(@$bx[1]);
	            $bc2 = trim(@$bxx[2])."-".trim(@$bxx[0])."-".trim(@$bxx[1]);
	            $data["tanggllaporan"] = @$bc." Sampai ".@$bc2;
	            $data["tanggllaporan1"] = @$bc;
	            $data["tanggllaporan2"] = @$bc2;
	            
	        	//Gelombang 2
		       	$b2x = explode("-", $this->input->post("reservation2"));
	            $bx2x = explode("/", @$b2x[0]);
	            $bxx2x = explode("/", @$b2x[1]);
	            $bc2x = trim(@$bx2x[2])."-".trim(@$bx2x[0])."-".trim(@$bx2x[1]);
	            $bc22x = trim(@$bxx2x[2])."-".trim(@$bxx2x[0])."-".trim(@$bxx2x[1]);
	            $data["tanggllaporan2x"] = @$bc2x." Sampai ".@$bc22x;
	            $data["tanggllaporan12x"] = @$bc2x;
	            $data["tanggllaporan22x"] = @$bc22x;
	            
	        	//Gelombang 3
		       	$b3 = explode("-", $this->input->post("reservation3"));
	            $bx3 = explode("/", @$b3[0]);
	            $bxx3 = explode("/", @$b3[1]);
	            $bc3 = trim(@$bx3[2])."-".trim(@$bx3[0])."-".trim(@$bx3[1]);
	            $bc23 = trim(@$bxx3[2])."-".trim(@$bxx3[0])."-".trim(@$bxx3[1]);
	            $data["tanggllaporan3"] = @$bc3." Sampai ".@$bc23;
	            $data["tanggllaporan13"] = @$bc3;
	            $data["tanggllaporan23"] = @$bc23;
	            
	        	//Gelombang 4
		       	$b4 = explode("-", $this->input->post("reservation4"));
	            $bx4 = explode("/", @$b4[0]);
	            $bxx4 = explode("/", @$b4[1]);
	            $bc4 = trim(@$bx4[2])."-".trim(@$bx4[0])."-".trim(@$bx4[1]);
	            $bc24 = trim(@$bxx4[2])."-".trim(@$bxx4[0])."-".trim(@$bxx4[1]);
	            $data["tanggllaporan4"] = @$bc4." Sampai ".@$bc24;
	            $data["tanggllaporan14"] = @$bc4;
	            $data["tanggllaporan24"] = @$bc24;

	        	$dataArray = array(
	        		"tahun_ajaran"=>$this->input->post("judul"),
	        		"tgl_mulai_g1"=>$bc,
	        		"tgl_akhir_g1"=>$bc2,
	        		"tgl_mulai_g2"=>$bc2x,
	        		"tgl_akhir_g2"=>$bc22x,
	        		"tgl_mulai_g3"=>$bc3,
	        		"tgl_akhir_g3"=>$bc23,
	        		"tgl_mulai_g4"=>$bc4,
	        		"tgl_akhir_g4"=>$bc24,
	        		"quotaG1"=>$this->input->post("quota1"),
	        		"quotaG2"=>$this->input->post("quota2"),
	        		"quotaG3"=>$this->input->post("quota3"),
	        		"quotaG4"=>$this->input->post("quota4"),
	        		"status"=>$this->input->post("status")
	        	);
	        	$this->qry->qedit(array("idsetpsb"=>$id), $dataArray, "setting_psb");
	        	redirect("../psb/setting/");
	        }
			
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('psb/settingpsb_ubah');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
   public function hasil($page='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['page'] = $page;
	        $data['psb'] = "active";
	        $data['footer_js'] = "dataTables";
	        $data['tampil'] = $this->qry->qResult('*', 'tb_psb_data', array('idpsb'=>$page));
	        if($page==1){
	        	$data['hp'] = "active";
	        	$data['rdt'] = "PSB TPQ";
	    	}
	    	else if($page==2){
	        	$data['hp'] = "active";
	        	$data['rdt'] = "PSB TK";
	    	}
	    	else if($page==3){
	        	$data['hp'] = "active";
	        	$data['rdt'] = "PSB SD";
	    	}
	    	else if($page==4){
	        	$data['hp'] = "active";
	        	$data['rdt'] = "PSB SMP";
	    	}
	    	else if($page==5){
	        	$data['hp'] = "active";
	        	$data['rdt'] = "PSB SMA";
	    	}
		
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('psb/hasil');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
	}
    public function settings($id='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['psb'] = "active";
	        $data['spm'] = "active";
	        $data['rdt'] = "Hasil";
	        $data['footer_js'] = "dataTables";

	        $data['tampil'] = $this->qry->qResult('*', 'pembayaran',"","","gelombang ASC");
			
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('psb/set_pembayaran');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function pp($value='', $id='')
    {
    	$edas = $this->qry->qResult('*', 'tb_psb_data', array("nomor"=>$id));
    	if($value=="sudah"){
    		$this->qry->qedit(array("nomor"=>$id), array("status_pembayaran"=>"Lunas"), 'tb_psb_data');
    	}
    	else if($value=="belum"){
    		$this->qry->qedit(array("nomor"=>$id), array("status_pembayaran"=>"Belum Bayar"), 'tb_psb_data');
    	}
    	redirect("../psb/psbs/".$edas[0]["idpsb"]);
    }
    public function settingsform($edit='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['psb'] = "active";
	        $data['spm'] = "active";
	        $data['footer_js'] = "validations";
	        if($edit!=""){
	        	$data['headtit'] = "Edit Pembayaran";
	        	$sbm = $this->input->post("judul");
	        	$data['redit'] = $this->qry->qResult('*', 'pembayaran', array('idpembayaran'=>$edit));
	        	if($sbm){
	        		$dataArry = array(
	        			"gelombang"=>$this->input->post("gelombang"),
	        			"ket"=>$this->input->post("judul"),
	        			"biaya"=>$this->input->post("biaya"),
	        		);
	        		$this->qry->qedit(array("idpembayaran"=>$edit),$dataArry, 'pembayaran');
	        		redirect("../psb/settings");
	        	}
	        }
	        else{
	        	$data['headtit'] = "Add Pembayaran";
	        	$sbm = $this->input->post("judul");
	        	if($sbm){
	        		$dataArry = array(
	        			"gelombang"=>$this->input->post("gelombang"),
	        			"ket"=>$this->input->post("judul"),
	        			"biaya"=>$this->input->post("biaya"),
	        		);
	        		$this->qry->qtambah($dataArry, 'pembayaran');
	        		redirect("../psb/settings");
	        	}
	        }
	        $data['tampil'] = $this->qry->qResult('*', 'pembayaran');
			
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('psb/addpembayaran');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
	
	    public function datapsb($hapus='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['dg'] = "active";
	        $data['lg'] = "active";
	        $data['footer_js'] = "dataTables";
			$data['rtampil'] = $this->qry->qResult('*', "tb_psb_data");
			if($hapus!=""){
				$this->qry->qhapus('tb_psb_data', array("nopen"=>$hapus));
				redirect("psb/datapsb");
			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('home/home');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
	
    public function terima($value='')
    {
    	$cek = $this->qry->qResult('*', 'tb_psb_data', array("nomor"=>$value));
    	if($cek[0]["status_psb"]==0){
    		$this->qry->qedit(array("nomor"=>$value), array("status_psb"=>1), 'tb_psb_data');
    	}
    	else{
    		$this->qry->qedit(array("nomor"=>$value), array("status_psb"=>0), 'tb_psb_data');
    	}
    	redirect("psb/hasil/5");
    }
}