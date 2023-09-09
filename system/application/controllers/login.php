<?php

class Login extends Controller {

	function Login()
	{
		parent::Controller();	
		$this->load->helper(array('form','url', 'text_helper','date'));
		$this->load->database();
		$this->load->library(array('Pagination','user_agent'));
		$this->load->plugin();
		$this->load->model('qry');
		$this->load->model('Web_model');
		session_start();
	}
	function index()
	{
		$sbm = $this->input->post("nama");
		if($sbm){
			$c=$this->qry->qResult('*', 'tb_psb_data', array("nopen"=>$this->input->post("nama"), "password"=>$this->input->post("paswd")),"","","num");
			if($c==0){
				echo"<script>alert('Salah No. Pendaftaran / Password');window.back(-1)</script>";
			}
			else{
				$cs=$this->qry->qResult('*', 'tb_psb_data', array("nopen"=>$this->input->post("nama"), "password"=>$this->input->post("paswd")));
					$_SESSION["userlog"] = $cs[0]["nomor"];
					$_SESSION["nopen"] = $cs[0]["nopen"];
				redirect("../");
			}
		}
	}
	public function logout()
	{
		session_destroy();redirect("../../index.php");
	}
	public function datasiswa()
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
		$data["nopens"] = rand();
		foreach($soal_poll->result() as $soal)
			{
				$id_soal=$soal->id;
			}
		$data["jawaban_polling"] = $this->Web_model->Tampil_Jwb_Poll($id_soal);
		if(isset($_SESSION["nopen"]))	{
			$data["siswa"]=$this->qry->qResult('*', 'tb_psb_data', array("nopen"=>@$_SESSION["nopen"]));
		}
		$this->load->view('web/bg_atas',$data);
		$this->load->view('web/datasiswa',$data);
	}
	public function dataortu()
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
		$data["nopens"] = rand();
		foreach($soal_poll->result() as $soal)
			{
				$id_soal=$soal->id;
			}
		$data["jawaban_polling"] = $this->Web_model->Tampil_Jwb_Poll($id_soal);
		if(isset($_SESSION["nopen"]))	{
			$data["siswa"]=$this->qry->qResult('*', 'tb_psb_data', array("nopen"=>@$_SESSION["nopen"]));
		}
		$this->load->view('web/bg_atas',$data);
		$this->load->view('web/dataortu',$data);
	}
	public function datapay()
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
		$data["nopens"] = rand();
		foreach($soal_poll->result() as $soal)
			{
				$id_soal=$soal->id;
			}
		$data["jawaban_polling"] = $this->Web_model->Tampil_Jwb_Poll($id_soal);
		if(isset($_SESSION["nopen"]))	{
			$data["siswa"]=$this->qry->qResult('*', 'tb_psb_data AS tpd INNER JOIN pembayaran AS p on tpd.idpsb=p.idpsb ', array("tpd.nopen"=>@$_SESSION["nopen"]));
		}
		$this->load->view('web/bg_atas',$data);
		$this->load->view('web/datapay',$data);
	}
	public function datahasil()
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
		$data["nopens"] = rand();
		foreach($soal_poll->result() as $soal)
			{
				$id_soal=$soal->id;
			}
		$data["jawaban_polling"] = $this->Web_model->Tampil_Jwb_Poll($id_soal);
		if(isset($_SESSION["nopen"]))	{
			$data["siswa"]=$this->qry->qResult('*', 'tb_psb_data', array("nopen"=>@$_SESSION["nopen"]));
		}
		$this->load->view('web/bg_atas',$data);
		$this->load->view('web/datahasil',$data);
	}
}