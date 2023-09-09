<?php
class allmod extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library(array('session'));
		//$this->codeigniter_instance->load->config('Instagram_api');
		$this->load->library('cart');
        $this->load->helper('form');
	}
	
	function activedata($page="", $menu="", $v=""){
		if($page==$menu){
			$active=$v;
		}
		else{
			$active="";
		}
		return $active;
	}
	function menuactive($page="", $menu=""){
		if($page==$menu){
			$active="current-menu-item";
		}
		else{
			$active="";
		}
		return $active;
	}
	function notifikasis($value='',$pesan="")
	{
		if($value=="gagal"){
			$t = '<div class="alert alert-danger">'.$pesan.'</div>';
		}
		else if($value=="berhasil"){
			$t = '<div class="alert alert-info">'.$pesan.'</div>';
		}
		else if($value=="peringatan"){
			$t = '<div class="alert alert-warning">'.$pesan.'</div>';
		}
		else{
			$t = "";
		}
		return $t;
	}
	function potongteks( $text="", $limit="" ) //Fungsi Untuk Memotong Panjang
	{
	 
	if( strlen($text)>$limit )
	  {
	    $text = substr( $text,0,$limit );
	    $text = substr( $text,0,-(strlen(strrchr($text,' '))) ); 
		$text .= '...';
	  }
	 
	return $text;
	}
	function fbtime($date="")
	{
	if(empty($date)) {
		return "No date provided";
	}
		$periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
		$lengths = array("60","60","24","7","4.35","12","10");
		 
		$now = time();
		$unix_date = strtotime($date);
	// check validity of date
	if(empty($unix_date)) {
		return "Bad date";
	}
	// is it future date or past date
	if($now > $unix_date) {
		$difference = $now - $unix_date;
		$tense = "ago";
	 
	} else {
		$difference = $unix_date - $now;
		$tense = "from now";
	}
	 
	for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
		$difference /= $lengths[$j];
	}
	 
	$difference = round($difference);
	 
	if($difference != 1) {
		$periods[$j].= "s";
	}
	 
	return "$difference $periods[$j] {$tense}";
	}
	function ifsubmits($posts="", $rower=""){
		$ps = $this->input->post($posts);
		$datax="";
		if($ps!=""){
			$datax = $this->input->post($posts);
		}
		else{
			$datax = $rower;
		}
		return $datax;
	}
	
	function replaceCharacter($tulisan){
		$vowels = array("[", "]");
		$vowels2 = array("&lbrack;", "&rbrack;");
		$tulisan = str_replace($vowels, $vowels2, $tulisan);
		return $tulisan;
	}
	function strip_word_html($text, $allowed_tags = '<p><b><i><sup><sub><em><strong><u><br>')
				{
						mb_regex_encoding('UTF-8');
						//replace MS special characters first
						$search = array('/&lsquo;/u', '/&rsquo;/u', '/&ldquo;/u', '/&rdquo;/u', '/&mdash;/u');
						$replace = array('\'', '\'', '"', '"', '-');
						$text = preg_replace($search, $replace, $text);
						//make sure _all_ html entities are converted to the plain ascii equivalents - it appears
						//in some MS headers, some html entities are encoded and some aren't
						$text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
						//try to strip out any C style comments first, since these, embedded in html comments, seem to
						//prevent strip_tags from removing html comments (MS Word introduced combination)
						if(mb_stripos($text, '/*') !== FALSE){
						$text = mb_eregi_replace('#/\*.*?\*/#s', '', $text, 'm');
						}
						//introduce a space into any arithmetic expressions that could be caught by strip_tags so that they won't be
						//'<1' becomes '< 1'(note: somewhat application specific)
						$text = preg_replace(array('/<([0-9]+)/'), array('< $1'), $text);
						$text = strip_tags($text, $allowed_tags);
						//eliminate extraneous whitespace from start and end of line, or anywhere there are two or more spaces, convert it to one
						$text = preg_replace(array('/^\s\s+/', '/\s\s+$/', '/\s\s+/u'), array('', '', ' '), $text);
						//strip out inline css and simplify style tags
						$search = array('#<(strong|b)[^>]*>(.*?)</(strong|b)>#isu', '#<(em|i)[^>]*>(.*?)</(em|i)>#isu', '#<u[^>]*>(.*?)</u>#isu');
						$replace = array('<b>$2</b>', '<i>$2</i>', '<u>$1</u>');
						$text = preg_replace($search, $replace, $text);
						//on some of the ?newer MS Word exports, where you get conditionals of the form 'if gte mso 9', etc., it appears
						//that whatever is in one of the html comments prevents strip_tags from eradicating the html comment that contains
						//some MS Style Definitions - this last bit gets rid of any leftover comments */
						$num_matches = preg_match_all("/\<!--/u", $text, $matches);
						if($num_matches){
						$text = preg_replace('/\<!--(.)*--\>/isu', '', $text);
						}
						return $text;
			}
	function permalink($id,$content)
	{
		$karakter = array ('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');
		$hapus_karakter_aneh = strtolower(str_replace($karakter,"",$content));
		$tambah_strip = strtolower(str_replace(' ', '-', $hapus_karakter_aneh));
		$link_akhir = $id.'-'.$tambah_strip;
		return $link_akhir;
	}
}