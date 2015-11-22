<?php
	class Check_model extends CI_Model{
		public $data;
		
		public function __construct(){
			parent::__construct();
		}
		
		public function getMessageByUserNum($user_num){
			$sql="select * from student where user_num=$user_num";
			$data=$this->db->query($sql);
			return $data->result();
		}
		
		public function saveMessage($id,$tittle,$value){
			$sql="insert into checkmessage(id,tittle,value) values($id,'$tittle','$value')";
			$this->db->query($sql);
		}
		
		public function wrongMessage($id){
			$sql="update checkmessage set type=1 where id=$id";
			$this->db->query($sql);
		}
		
		public function isChecked($user_num){
			$sql="update student set ischeck=1 where user_num=$user_num";
			$this->db->query($sql);
		}
		
		public function getCheckmessage(){
			$sql="select * from checkmessage";
			$data=$this->db->query($sql);
			return $data->result();
		}
		
		public function isPass($user_num){
			$sql="update student set status=1 where user_num=$user_num";
			$this->db->query($sql);
		}
		
		public function noPass($user_num){
			$sql="update student set status=0 where user_num=$user_num";
			$this->db->query($sql);
		}
		
		public function deleteAll(){
			$sql="delete from checkmessage";
			$this->db->query($sql);
		}
		
		public function saveWrongmessage($data){
			$this->db->insert('savewrongmessage',$data);
		}
		
		public function checkInfo($data1){
			$this->db->insert('CheckInfor',$data1);
		}
		
		public function getManagerName(){
			$sql="select * from Whocheck";
			$data=$this->db->query($sql);
			return $data->result();
		}
		
	} 
?>