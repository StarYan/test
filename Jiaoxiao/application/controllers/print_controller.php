<?php
	class Print_controller extends CI_Controller{
		public function printPage($user_num){
			$this->load->helper('url');
			$this->load->model('Print_model','print');
			$list=$this->print->getPassMessage($user_num);
			$data['list']=$list;
			$this->load->view('print_view',$data);
		}
	}
?>