<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/19
 * Time: 14:15
 */
    class Appointment_controller extends CI_Controller{
        public function Appointment(){
            $this->load->helper('url');
            $this->load->view('appointment_view');
        }

        public function StudentLogin(){
            $this->load->helper('url');
            $name=$_POST['Username'];
            $password=$_POST['pass'];
            $this->load->model('appointment_model','appointment');
            $list=$this->appointment->getStudentInfoByName($name);
            $data['list']=$list;
            $data['status']=1;
            if($list[0]->password==$password){
                $this->load->view('appointment_view',$data);
            }
        }

    }