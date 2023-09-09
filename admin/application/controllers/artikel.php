<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['art'] = "active";
	        $data['footer_js'] = "dataTables";
			$data["variable"] = $this->qry->qResult('*', 'tbl_artikel', '', '', 'id_artikel DESC');
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('artikel/artikel');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function hapus($id='')
    {
    	$this->qry->qhapus('tbl_artikel', array("id_artikel"=>$id));
    	redirect("../artikel/");
    }
    public function artikelform($edit='')
    {
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['art'] = "active";
	        $data['footer_js'] = "validations";
			
			if($edit!=""){
		        $data['headtit'] = "Edit Artikel";
				$subm = $this->input->post("judul");
				$data['redit'] = $this->qry->qResult('*', 'tbl_artikel', array('id_artikel'=>$edit));
				if($subm){
					$foto = $_FILES["uploadfile"];
					if($foto["name"]==""){
						$dg = $this->qry->qResult('*', 'tbl_artikel', array("id_artikel"=>$edit) );
						$fotos = $dg[0]["gambar"];
					}
					else{
						$kateg= $this->input->post("tipe");
						$fotos=$this->uploaders->uploadgambar("uploadfile", "../system/application/views/web/berita/");
					}
			    	$dataArry = array(
			    		"judul"=>$this->input->post("judul"),
			    		"isi"=>$this->input->post("content"),
			    		"gambar"=>$fotos,
			    		"tipe_artikel"=>"berita",
			    		"id_kategori"=>$this->input->post("tipe"),
			    		"id_penulis"=>1,
			    		"tanggal"=>date("Y-m-d"),
			    		"waktu"=>date("H:i:s"),
			    	);
			    	$this->qry->qedit(array("id_artikel"=>$edit), $dataArry, 'tbl_artikel');
			    	redirect("../artikel");
		    	}
    		}
    		else{
			    $data['headtit'] = "Add Artikel";
			    $subm = $this->input->post("judul");
				if($subm){
					$foto = $_FILES["uploadfile"];
					if($foto["name"]==""){
						$fotos = "";
					}
					else{
						$kateg= $this->input->post("tipe");
						$fotos=$this->uploaders->uploadgambar("uploadfile", "../system/application/views/web/berita/");
					}
			    	$dataArry = array(
			    		"judul"=>$this->input->post("judul"),
			    		"isi"=>$this->input->post("content"),
			    		"tipe_artikel"=>"berita",
			    		"id_kategori"=>$this->input->post("tipe"),
			    		"id_penulis"=>1,
			    		"gambar"=>$fotos,
			    		"tanggal"=>date("Y-m-d"),
			    		"waktu"=>date("H:i:s"),
			    	);
			    	$this->qry->qtambah($dataArry, 'tbl_artikel');
			    	redirect("../artikel");
		    	}
    		}

			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('artikel/artikeladd');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    	
    }
}