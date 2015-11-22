<?php
	class Login_model extends CI_Model{
		
		public $data;
		
		public function __construct(){
			parent::__construct();
		}
		
		public function getById($id){
			$sql="select * from manager where id=$id";
			$data=$this->db->query($sql);
			return $data->result();
			
		}
		
		public function saveName($managername){
			$sql="insert into Whocheck(managername) values('$managername')";
			$this->db->query($sql);
		}
		
		public function clearImfor(){
			$sql="delete from Whocheck";
			$this->db->query($sql);
		}
	}
?>