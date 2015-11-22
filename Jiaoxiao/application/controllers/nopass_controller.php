<?php
	class Nopass_controller extends CI_Controller{
		//加载错误信息页面
		public function nopass($user_num){
			$this->load->helper('url');
			$this->load->model('Nopass_model','nopass');
			$list=$this->nopass->getAllMessage($user_num);
			$managerInfo=$this->nopass->getManager($user_num);
			$data['list']=$list;
			$data['managerInfo']=$managerInfo;
			$this->load->view('nopass_view',$data);
		}
	} 
?>