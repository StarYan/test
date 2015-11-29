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
        }

        public function loadview(){
            $this->load->view('test');
        }

        public function place(){
            $result = $this->place_model->getall();
            return $this->send_json(true,"",$result);
        }

        public function coach(){
            $this->input->post('id');

        }

    }