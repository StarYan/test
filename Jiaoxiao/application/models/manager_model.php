<?php
	class Manager_model extends CI_Model{
		
		public $data;
		
		public function __construct(){
			parent::__construct();
		}
		
		
		//对审核合格的数据库操作
		public function getCount_pass(){
			$sql="select count(*) as cou from student where ischeck=1 and status=1";
			$data=$this->db->query($sql);
			return $data->result();
		}
		
		public function showPassMessage($offset,$pagesize){
			$sql="select * from student where ischeck=1 and status=1 order by id desc limit $offset,$pagesize";
			$data=$this->db->query($sql);
			return $data->result_array();
		}
		
		public function searchPassMessageByUsernum($offset,$pagesize,$keywords){
			$sql="select * from student where ischeck=1 and status=1 and user_num like '%$keywords%' limit $offset,$pagesize";
			$data=$this->db->query($sql);
			return $data->result_array();
		}
		
		public function searchPassMessageByUsername($offset,$pagesize,$keywords){
			$sql="select * from student where ischeck=1 and status=1 and user_name like '%$keywords%' limit $offset,$pagesize";
			$data=$this->db->query($sql);
			return $data->result_array();
		}
		
		//对审核不合格的数据库操作
		public function getCount_nopass(){
			$sql="select count(*) as cou from student where ischeck=1 and status=0";
			$data=$this->db->query($sql);
			return $data->result();
		}
		
		public function showNopassMessage($offset,$pagesize){
			$sql="select * from student where ischeck=1 and status=0 order by id desc limit $offset,$pagesize";
			$data=$this->db->query($sql);
			return $data->result_array();
		}
		
		public function searchNopassMessageByUsernum($offset,$pagesize,$keywords){
			$sql="select * from student where ischeck=1 and status=0 and user_num like '%$keywords%' limit $offset,$pagesize";
			$data=$this->db->query($sql);
			return $data->result_array();
		}
		
		public function searchNopassMessageByUsername($offset,$pagesize,$keywords){
			$sql="select * from student where ischeck=1 and status=0 and user_name like '%$keywords%' limit $offset,$pagesize";
			$data=$this->db->query($sql);
			return $data->result_array();
		}
		
		
		//对没有被审核的数据库操作
		public function getCount_nocheck(){
			$sql="select count(*) as cou from student where ischeck=0";
			$data=$this->db->query($sql);
			return $data->result();
		}
		
		public function showNocheckMessage($offset,$pagesize){
			$sql="select * from student where ischeck=0 order by id desc limit $offset,$pagesize";
			$data=$this->db->query($sql);
			return $data->result_array();
		}
		
		public function searchNocheckMessageByUsernum($offset,$pagesize,$keywords){
			$sql="select * from student where ischeck=0 and user_num like '%$keywords%' limit $offset,$pagesize";
			$data=$this->db->query($sql);
			return $data->result_array();
		}
		
		public function searchNocheckMessageByUsername($offset,$pagesize,$keywords){
			$sql="select * from student where ischeck=0 and user_name like '%$keywords%' limit $offset,$pagesize";
			$data=$this->db->query($sql);
			return $data->result_array();
		}
	}
?>