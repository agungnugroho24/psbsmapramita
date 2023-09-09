<?php
class Uploaders extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function uploadgambar($namefiledata, $foldergambar, $resizegambar="", $maxWidth="", $maxHeight="",$asli=""){
		$url = $foldergambar;	//path image 
		$config['upload_path'] = $url.$asli;		
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
		if($maxWidth!=""){
			$config['max_width'] = $maxWidth;	
		}
		if($maxHeight!=""){
			$config['max_height'] = $maxHeight;	
		}
		$this->upload->initialize($config);
			if( $this->upload->do_upload($namefiledata))
				{	
					$files = $this->upload->data();
					$fileNameResize = $config['upload_path'].$files['file_name'];
					if($resizegambar!=""){
						$size =  $resizegambar;
						$resize = array();
						foreach($size as $r){
							$resize = array(
								"width"			=> $r['width'],
								"height"		=> $r['height'],
								"quality"		=> $r['quality'],
								"maintain_ratio"=> false,
								"source_image"	=> $fileNameResize,
								"new_image"		=> $url.''.$r["name"]."/".$files['file_name']
							);
							$this->image_lib->initialize($resize);
							if(!$this->image_lib->resize())					
								return "";
						}
					}
						return $files['file_name'];
				} 
					else 
						return "";
	}
	public function uploadimage($value='', $value='')
	{
		 $config['upload_path']   =   "../banner/";
 
       $config['allowed_types'] =   "gif|jpg|jpeg|png";
 
       $config['max_size']      =   "5000";
 
       //$config['max_width']     =   "1907";
 
       //$config['max_height']    =   "1280";
 
       $this->load->library('upload',$config);
 
       if(!$this->upload->do_upload())
 
       {
 
           echo $this->upload->display_errors();
 
       }
 
       else
 
       {
 
           $finfo=$this->upload->data();
 
           $this->_createThumbnail($finfo['file_name']);
 
           $data['uploadInfo'] = $finfo;
 
           $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext'];
 
           $this->load->view('upload_success',$data);
 
       }
	}
}