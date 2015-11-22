<?php
	class Print_model extends CI_Model{
		public $data;
		public function getPassMessage($user_num){
			$sql="select * from student where user_num=$user_num";
			$data=$this->db->query($sql);
			return $data->result();
		}
	}
?>