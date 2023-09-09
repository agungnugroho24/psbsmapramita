<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['gl'] = "active";
	        $data['gls'] = "active";
	        $data['footer_js'] = "dataTables";

			$data["variable"] = $this->qry->qResult('*', "tbl_galeri","","","id_foto DESC");

			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('gallery/list');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function hapus($id='')
    {
    	$this->qry->qhapus('tbl_galeri', array("id_foto"=>@$id));
    	redirect("../gallery");
    }
    public function add($edit=""){
		if($this->session->userdata('logged_in')) {

			$data["albums"] = $this->qry->qResult('*', "tbl_album_galeri");
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['gl'] = "active";
	        $data['gls'] = "active";
	        $data['footer_js'] = "validations";

			if($edit==""){
				$data['headtit'] = "Tambah Gallery";
				$submit = $this->input->post("album");
				if ($submit) {
					$foto = $_FILES["uploadfile"];
					if($foto["name"]==""){
						$fotos= "";
					}
					else{
						$resize =  array(			
									array('name'	=> 'thumb','width'	=> 130, 'height'	=> 97, 'quality'	=> '100%')
						);
						$fotos=$this->uploaders->uploadgambar("uploadfile", "../system/application/views/web/galeri/",$resize);
					}
					$dataArry = array(
						"id_album"=>$this->input->post("album"),
						"foto_kecil"=>$fotos,
						"foto_besar"=>$fotos
					);
					$this->qry->qtambah($dataArry, 'tbl_galeri');
					redirect("../gallery");
				}
			}
			else{ //Jika Edit
				$data['headtit'] = "Edit Gallery";
				$data['redit'] = $this->qry->qResult('*', "tbl_galeri", array("id_foto"=>$edit));
				$submit = $this->input->post("album");
				if ($submit) {
					$foto = $_FILES["uploadfile"];
					if($foto["name"]==""){
						$fotos= "";
					}
					else{
						$resize =  array(			
									array('name'	=> 'thumb','width'	=> 130, 'height'	=> 97, 'quality'	=> '100%')
						);
						$fotos=$this->uploaders->uploadgambar("uploadfile", "../system/application/views/web/galeri/",$resize);
					}
					$dataArry = array(
						"id_album"=>$this->input->post("album"),
						"foto_kecil"=>$fotos,
						"foto_besar"=>$fotos
					);
					$this->qry->qedit(array("id_foto"=>$edit), $dataArry, 'tbl_galeri');
					redirect("../Gallery");
				}
			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('gallery/addgallery');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function albumgallery($edit='')
    {
    	# code...
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['gl'] = "active";
	        $data['ag'] = "active";
	        $data['footer_js'] = "dataTables";

			$data["variable"] = $this->qry->qResult('*', "tbl_album_galeri","","","id_album DESC");

			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('gallery/listalbum');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
    public function albumgalleryform($edit='')
    {
    	# code...
    	if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
	        $data['idus'] = $session_data['idam'];
	        $data['nama_lengkap'] = $session_data['namal'];
	        $data['gl'] = "active";
	        $data['ag'] = "active";
	        $data['footer_js'] = "validations";
	        if($edit==""){
	        	$data['headtit'] = "Add Album Gallery";
	        	$sbm = $this->input->post("judul");
	        	if($sbm){
	        		$this->qry->qtambah(array("nama_album"=>$this->input->post("judul")), 'tbl_album_galeri');
	        		redirect("../gallery/albumgallery");
	        	}
	        }
	        else{
	        	$data['headtit'] = "Edit Album Gallery";
				$data["redit"] = $this->qry->qResult('*', "tbl_album_galeri",array("id_album"=>$edit),"","id_album DESC");
				$sbm = $this->input->post("judul");
	        	if($sbm){
	        		$this->qry->qedit(array("id_album"=>$edit), array("nama_album"=>$this->input->post("judul")), 'tbl_album_galeri');
	        		redirect("../gallery/albumgallery");
	        	}
			}
			$this->load->view('header', $data);
			$this->load->view('menu_top');
			$this->load->view('menu_left');
			$this->load->view('gallery/albumgalleryadd');
			$this->load->view('footer');
		}
		else{
			redirect("login");
		}
    }
}