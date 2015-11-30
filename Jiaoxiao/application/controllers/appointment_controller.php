<?php
/**
 * Created by PhpStorm.
 * 用户预约模块
 */
    class Appointment extends MY_Controller{

        public function __construct() {
            parent::__construct();
            $this->load->model('appointment_model');
            $this->load->model('place_model');
            $this->load->model('coachandplace_model');
            $this->load->model('appointment_model');
            $this->load->model('user_model');
        }

        public function appointmentmodel(){
            $this->load->view('appointment_view');
        }

        public function place(){
            $result = $this->place_model->getall();
            return $this->send_json(true,"",$result);
        }

        public function coach(){
            $placeid = $this->input->post('id',true);
            $time = $this->input->post('time',true);
            if($placeid && $time){
                $data['placeid'] = $placeid;
                $data['time'] = $time;
                $result = $this->coachandplace_model->get_by_placeid($data);
                return $this->send_json(true,"成功",$result);
            }
            return $this->send_json(flase,"查找错误");
        }

        public function saveappointment(){
            $coachandplaceid = $this->input->post('coachandplaceid',true);
            $userid = $this->input->post('userid',true);
            $time = $this->input->post('time',true);
            $cartype = $this->input->post('cartype',true);
            if($coachandplaceid&&$userid&&$time&&$cartype){
                $data['coachandplaceid'] = $coachandplaceid;
                $data['userid'] = $userid;
                $data['time'] = $time;
                $data['cartype'] = $cartype;
                $this->appointment_model->get_by_placeid($data);
                return $this->send_json(true,"成功");
            }
            return $this->send_json(false,"查找错误");
        }

        public function login(){
            $name = $this->input->post('username',true);
            $password = $this->input->post('pwd',true);
            if($name&&$password){
                $data['name'] = $name;
                $data['password'] = $password;
                if($this->checklogin()){
                    unset($_SESSION);
                }
                $result = $this->user_model->get_by_name_and_pwd($data);
                $_SESSION = $result;
                return $this->send_json(true,"登录成功");
            }
            return $this->send_json(false,"登录失败，请查看密码或用户名是否正确");
        }

        public function logout(){
            unset($_SESSION);
            return $this->send_json(true,"注销成功");
        }

    }