<?php
	class Check_controller extends CI_Controller{
		//加载审核页面
		public function Checked($user_num){
			$this->load->helper('url');
			$this->load->model('check_model','check');
			$list=$this->check->getMessageByUserNum($user_num);
			$this->check->saveMessage(1,'姓名',$list[0]->user_name);
			$this->check->saveMessage(2,'性别',$list[0]->sex);
			$this->check->saveMessage(3,'出生日期',$list[0]->birthday);
			$this->check->saveMessage(4,'身份证号',$list[0]->user_id);
			$this->check->saveMessage(5,'住址',$list[0]->address);
			$this->check->saveMessage(6,'联系电话',$list[0]->phone_number);
			$this->check->saveMessage(7,'原准驾车型',$list[0]->original_car_type);
			$this->check->saveMessage(8,'培训车型',$list[0]->car_type);
			$this->check->saveMessage(9,'用户照片',$list[0]->photo);
			$data['list']=$list;
			$this->load->view('check_view',$data);
		}
		
		
		public function Submited($user_num){
			$this->load->helper('url');
			$this->load->model('check_model','check');
			$this->check->isChecked($user_num);
			$list=$this->check->getCheckmessage();
			$message=$this->check->getMessageByUserNum($user_num);
				
			$username=$message[0]->user_name;
			$num=0;
			foreach($list as $value){
				$reason=isset($_POST["$value->tittle"])?$_POST["$value->tittle"]:"";
				if(!empty($reason)){
					$data=array(
					'user_num' => $user_num,
					'user_name' => $username,
					'tittle' => $value->tittle,
					'value' => $value->value,
					'wrongreason' => $reason
					);
					$this->check->saveWrongmessage($data);
					$num++;
				}
			}
				
			if($num>0){
				$this->check->noPass($user_num);
				
			}else{
				$this->check->isPass($user_num);
			}
				
			$this->check->deleteAll();
			$name=$this->check->getManagerName();
			$data1=array(
			'user_num' => $user_num,
			'managername' => $name[0]->managername,
			'checktime' => date("ymdhis")
			);
			
			$this->check->checkInfo($data1);
			redirect('/manager_controller/Nocheck');
		}
	}
?>