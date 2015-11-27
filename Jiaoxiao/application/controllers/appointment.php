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
        }
        public function index(){

        }

    }