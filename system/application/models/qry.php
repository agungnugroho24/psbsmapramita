<?php
class qry extends Model{
	function __construct(){
		parent::__construct();
		//$this->load->database();
		//$this->load->library(array('session'));
	}
	
	//Query Query Tampil
	function qResult($select="*", $table="",$whr="",$limit="",$ordby="", $num="", $groupby=""){
		$this->db->select($select);
		if($whr!=""){
			$this->db->where($whr);
		}
		if($ordby!=""){
			$this->db->order_by($ordby); 
		}
		$this->db->from($table);
		if($limit!=""){
			$this->db->limit($limit);
		}
		if($groupby!=""){
			$this->db->group_by($groupby);
		}
		$query = $this->db->get();
		if($num==""){
			$qk = $query->result_array();
		}
		else{
			$qk = $query->num_rows();
		}
		return $qk;
	}
	public function eQuery($value='')
	{
		$qr = $this->db->query($value);
		$qk = $qr->result_array();
		return $qk;
	}
	//Query TambaH
	function qtambah($data, $tabel){
		return $this->db->insert($tabel, $data);
	}
	
	//Query Edit
	function qedit($where, $dataArray, $tabel){
		$this->db->where($where);
		return $this->db->update($tabel, $dataArray);
	}
	
	//Query Detail
	function qdetail($tabel, $where){
		$this->db->where($where);
		$query = $this->db->get($tabel);
		return $query->result_array();
	}
	//Query Detail
	function qrow($tabel, $where, $rs ){
		$this->db->where($where);
		$query = $this->db->get($tabel);
		$u = $query->result_array();
		return @$u[0]["$rs"];
	}
	
	function lastRow($tabel){
		$query = $this->db->get($tabel);
		return $query->last_row('array');
	}

	function qhapus($table,$wheres){
		if(!empty($wheres)){
			$this->db->where($wheres)->delete($table);
			return true;
		}
		else { return false; }
	}
	public function psbgelombang($idpsb='')
	{
		$gelombang = 0;
		$tgl = date("Y-m-d");
		$qt = $this->db->query("select * from setting_psb where tgl_akhir_g1 >= '$tgl' and status='aktif' and idpsb='$idpsb' ");
		$qk = $qt->num_rows();
		if($qk!=0){
			$gelombang=1;
		}
		else{
			$qc = $this->db->query("select * from setting_psb where  tgl_akhir_g2 >='$tgl' and status='aktif' and idpsb='$idpsb' ");
			$qkc = $qc->num_rows();
			if($qkc!=0){
				$gelombang=2;
			}
			else{
				$qcd = $this->db->query("select * from setting_psb where tgl_akhir_g3 >='$tgl' and status='aktif' and idpsb='$idpsb' ");
				$qkcd = $qcd->num_rows();
				if($qkcd!=0){
					$gelombang=3;
				}
				else{
					$qcdr = $this->db->query("select * from setting_psb where tgl_akhir_g4 >='$tgl' and status='aktif' and idpsb='$idpsb' ");
					$qkcdr = $qcdr->num_rows();
					if($qkcdr!=0){
						$gelombang=4;
					}
					else{
						$gelombang=0;
					}
				}
			}
		}
		return $gelombang;
	}
}