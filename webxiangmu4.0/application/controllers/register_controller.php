<?php
	class Register_controller extends CI_Controller{
		//加载报名页面视图
		public function Register(){
			$this->load->helper('url');
			$this->load->view('register_view');
		}
		
		//往数据库中添加来自报名页面的信息
		public function Add_message(){
			$this->load->helper('url');
			//上传照片
			$config['upload_path']='./uploads/';
			$config['allowed_types']='png|jpg|jpeg';
			$config['max_size']='40000';
			$this->load->library('upload',$config);
			$this->upload->do_upload('PHOTO');
			$res=$this->upload->data();

			$data['user_name']=$this->input->post('NAME');
			$data['sex']=$this->input->post('SEX');
			$data['birthday']=$this->input->post('BIRTHDAY');
			$data['user_id']=$this->input->post('USER_ID');
			$data['address']=$this->input->post('ADDRESS');
			$data['phone_number']=$this->input->post('PHONE');
			$data['original_car_type']=$this->input->post('O_CAR_TYPE');
			$data['car_type']=$this->input->post('CAR_TYPE');
			$data['photo']=$res['file_name'];
			$data['user_num']=date("ymdhis")+""+rand(0001, 9999);//流水号是报名信息提交时间加四位随机数
			
			$this->load->model('register_model','register');
			$this->register->Addmessage($data);
		}
	}
?>