<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/19
 * Time: 14:15
 */
    class Appointment extends MY_Controller{

        public function __construct() {
            parent::__construct();
            $this->load->model('appointment_model');
            $this->load->model('place_model');
            $this->load->model('coachandplace_model');
            $this->load->model('appointment_model');
        }

        public function appointmentmodel(){
            $this->load->view('appointment_view');
        }

        public function place(){
            $result = $this->place_model->getall();
            return $this->send_json(true,"",$result);
        }

        public function coach(){
            $placeid = $this->input->post('id');
            $time = $this->input->post('time');
            if($placeid && $time){
                $data['placeid'] = $placeid;
                $data['time'] = $time;
                $result = $this->coachandplace_model->get_by_placeid($data);
                return $this->send_json(true,"成功",$result);
            }
            return $this->send_json(flase,"查找错误");
        }

        public function saveappointment(){
            $coachandplaceid = $this->input->post('coachandplaceid');
            $userid = $this->input->post('userid');
            $time = $this->input->post('time');
            $cartype = $this->input->post('cartype');
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

        }

    }