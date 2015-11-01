<?php
	class Nopass_model extends CI_Model{
		public $data;
		
		public function __construct(){
			parent::__construct();
		}
		
		public function getAllMessage($user_num){
			$sql="select * from savewrongmessage where user_num=$user_num";
			$data=$this->db->query($sql);
			return $data->result();
		}
		
		public function getManager($user_num){
			$sql="select * from CheckInfor where user_num=$user_num";
			$data=$this->db->query($sql);
			return $data->result();
		}
		
	} 
?>