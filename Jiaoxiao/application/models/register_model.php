<?php
	class Register_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
	
		public function Addmessage($data){
			$bool=$this->db->insert('student',$data);
			$data['flag']=1;
			$this->load->view('register_view',$data);
		}
	}
?>