<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// show all errors and warning
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

class Psb extends Controller {
    
    
    function psb(){
		parent::Controller();	
		$this->load->helper(array('form','url', 'text_helper','date'));
		$this->load->database();
		$this->load->library(array('Pagination','user_agent'));
		$this->load->plugin();
		$this->load->model('qry');
		$this->load->model('Web_model');
		session_start();
    }
    function daftar($page='',$step="")
    {
		
		$data["counter_pengunjung"] = $this->Web_model->Counter_Pengunjung();
		setcookie("pengunjung", "sudah berkunjung", time() + 900 * 24);
		if (!isset($_COOKIE["pengunjung"])) {
			$this->Web_model->Update_Pengunjung();
		}
		$data["cekaktifPSB"] = $this->qry->psbgelombang($page);
		//$this->qry->qResult('*', 'setting_psb', array("idpsb"=>$page, "status"=>"aktif" ),"","","num");

		$data["dataid"] = $page;
		$data["donlod"] = $this->Web_model->Berkas(0,3);
		$data["menu"] = $this->Web_model->Menu_Atas();
		$data["menu_bawah"] = $this->Web_model->Menu_Bawah();
		$data["agenda"] = $this->Web_model->Tampil_Event("agenda","5");
		$data["pengumuman"] = $this->Web_model->Tampil_Event("pengumuman","4");
		$data["slide_learning"] = $this->Web_model->Slide_Artikel("tutorial","and id_kategori='1'","2");
		$data["slide_kemahasiswaan"] = $this->Web_model->Slide_Artikel("berita","and id_kategori='2'","2");
		$data["slide_akademik"] = $this->Web_model->Slide_Artikel("berita","and id_kategori='1'","2");
		$data["slide_kegiatan"] = $this->Web_model->Slide_Artikel("berita","and id_kategori='5'","2");
		$data["browser"] = $this->agent->browser().' '.$this->agent->version();
		$data["os"] = $this->agent->platform();
		$data["soal_polling"] = $this->Web_model->Tampil_Polling();
		$soal_poll = $data["soal_polling"];
		$data["nopens"] = rand();
		foreach($soal_poll->result() as $soal)
			{
				$id_soal=$soal->id;
			}
		$data["jawaban_polling"] = $this->Web_model->Tampil_Jwb_Poll($id_soal);

		$this->load->view('web/bg_atas',$data);
		//$this->load->view('web/bg_kiri',$data);
		if($page==1){
			$data["gaga"] = "Pendaftaran TPQ";
		}
		else if($page==2){
			$data["gaga"] = "Pendaftaran TKI";
		}
		else if($page==3){
			$data["gaga"] = "Pendaftaran SDIT";
		}
		else if($page==4){
			$data["gaga"] = "Pendaftaran SMPIT";
		}
		else if($page==5){
			$data["gaga"] = "Pendaftaran SMA";
		}
		if($step==""){
			$this->load->view('web/psb',$data);
		}
		else{
			$sbm = $this->input->post("nama");
			if($sbm){
				$this->load->view('web/psb2',$data);
			}
			$sbms = $this->input->post("submit");
			if($sbms){
				$rdm = @$this->input->post("nopen");
				$dataArry = array(
					"nopen"=>$rdm,
					"password"=>@$this->input->post("password"),
					"password2"=>@$this->input->post("password2"),
					"nama"=>@$this->input->post("nama"),
					"jk"=>@$this->input->post("jk"),
					"tempat_lahir"=>@$this->input->post("tempat_lahir"),
					"tanggal_lahir"=>@$this->input->post("tanggal_lahir"),
					"bhs"=>@$this->input->post("bhs"),
					"no_sttb"=>@$this->input->post("no_sttb"),
					"anak_ke"=>@$this->input->post("anak_ke"),
					"kdk"=>@$this->input->post("kdk"),
					"jumsau"=>@$this->input->post("jumsau"),
					"tglbrsama"=>@$this->input->post("tglbrsama"),
					"alamat"=>@$this->input->post("alamat"),
					"namaayah"=>@$this->input->post("namaayah"),
					"namaibu"=>@$this->input->post("namaibu"),
					"namawali"=>@$this->input->post("namawali"),
					"tlp"=>@$this->input->post("tlp"),
					"tlportu"=>@$this->input->post("tlportu"),
					"pendidikan_ayah"=>$this->input->post("pendidikan_ayah"),
					"pendidikan_ibu"=>@$this->input->post("pendidikan_ibu"),
					"pendidikan_wali"=>@$this->input->post("pendidikan_wali"),
					"pekerjaan_ayah"=>@$this->input->post("pekerjaan_ayah"),
					"pekerjaan_ibu"=>@$this->input->post("pekerjaan_ibu"),
					"pekerjaan_wali"=>@$this->input->post("pekerjaan_wali"),
					"alamat_ayah"=>@$this->input->post("alamat_ayah"),
					"alamat_ibu"=>@$this->input->post("alamat_ibu"),
					"alamat_wali"=>@$this->input->post("alamat_wali"),

					"tdsd"=>date("Y-m-d"),
					"tk"=>@$this->input->post("tk"),
					"tglijazahtk"=>@$this->input->post("tglijazahtk"),
					"pindahansd"=>@$this->input->post("pindahansd"),
					"nosurat"=>@$this->input->post("nosurat"),
					"diterima"=>@$this->input->post("diterima"),
					"dikelas"=>@$this->input->post("dikelas"),
					"asalsekolah"=>@$this->input->post("asalsekolah"),
					"noijazah"=>@$this->input->post("noijazah"),
					"nilai"=>@$this->input->post("nilai"),
					"jurusan"=>@$this->input->post("jurusan"),
					"status_psb"=>0,
					"polling_psb"=>@$this->input->post("polling_psb"),
					"idpsb"=>@$page,
					"gelombang"=>@$this->input->post("gelombang"),
				);
				$ggb = $this->qry->qtambah($dataArry, 'tb_psb_data');
				if($ggb){
					redirect(base_url()."index.php/psb/berhasil/".$rdm);
				}
				else{
					redirect("gagal");
				}
			}
		}
		
    }
    public function berhasil($nopen='')
    {
    	$data["counter_pengunjung"] = $this->Web_model->Counter_Pengunjung();
		setcookie("pengunjung", "sudah berkunjung", time() + 900 * 24);
		if (!isset($_COOKIE["pengunjung"])) {
			$this->Web_model->Update_Pengunjung();
		}
		$data["donlod"] = $this->Web_model->Berkas(0,3);
		$data["menu"] = $this->Web_model->Menu_Atas();
		$data["menu_bawah"] = $this->Web_model->Menu_Bawah();
		$data["agenda"] = $this->Web_model->Tampil_Event("agenda","5");
		$data["pengumuman"] = $this->Web_model->Tampil_Event("pengumuman","4");
		$data["slide_learning"] = $this->Web_model->Slide_Artikel("tutorial","and id_kategori='1'","2");
		$data["slide_kemahasiswaan"] = $this->Web_model->Slide_Artikel("berita","and id_kategori='2'","2");
		$data["slide_akademik"] = $this->Web_model->Slide_Artikel("berita","and id_kategori='1'","2");
		$data["slide_kegiatan"] = $this->Web_model->Slide_Artikel("berita","and id_kategori='5'","2");
		$data["browser"] = $this->agent->browser().' '.$this->agent->version();
		$data["os"] = $this->agent->platform();
		$data["soal_polling"] = $this->Web_model->Tampil_Polling();
		$soal_poll = $data["soal_polling"];
		foreach($soal_poll->result() as $soal)
			{
				$id_soal=$soal->id;
			}
		$data["jawaban_polling"] = $this->Web_model->Tampil_Jwb_Poll($id_soal);
		$data["tampil"] = $this->qry->qResult('*', "tb_psb_data", array("nopen"=>$nopen));
		$this->load->view('web/berhasil',$data);
    }
public function login($nopen='')
    {
    	$data["counter_pengunjung"] = $this->Web_model->Counter_Pengunjung();
		setcookie("pengunjung", "sudah berkunjung", time() + 900 * 24);
		if (!isset($_COOKIE["pengunjung"])) {
			$this->Web_model->Update_Pengunjung();
		}
		$data["donlod"] = $this->Web_model->Berkas(0,3);
		$data["menu"] = $this->Web_model->Menu_Atas();
		$data["menu_bawah"] = $this->Web_model->Menu_Bawah();
		$data["agenda"] = $this->Web_model->Tampil_Event("agenda","5");
		$data["pengumuman"] = $this->Web_model->Tampil_Event("pengumuman","4");
		$data["slide_learning"] = $this->Web_model->Slide_Artikel("tutorial","and id_kategori='1'","2");
		$data["slide_kemahasiswaan"] = $this->Web_model->Slide_Artikel("berita","and id_kategori='2'","2");
		$data["slide_akademik"] = $this->Web_model->Slide_Artikel("berita","and id_kategori='1'","2");
		$data["slide_kegiatan"] = $this->Web_model->Slide_Artikel("berita","and id_kategori='5'","2");
		$data["browser"] = $this->agent->browser().' '.$this->agent->version();
		$data["os"] = $this->agent->platform();
		$data["soal_polling"] = $this->Web_model->Tampil_Polling();
		$soal_poll = $data["soal_polling"];
		foreach($soal_poll->result() as $soal)
			{
				$id_soal=$soal->id;
			}
		$data["jawaban_polling"] = $this->Web_model->Tampil_Jwb_Poll($id_soal);
		$data["tampil"] = $this->qry->qResult('*', "tb_psb_data", array("nopen"=>$nopen));
		$this->load->view('web/login',$data);
    }
}