<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/19
 * Time: 14:18
 */
    class Appointment_model extends CI_Model{
        public $data;
        public function __construct(){
            parent::__construct();
        }

        public function getStudentInfoByName($name){
            $sql="select * from `student_login` where `studentname` = '$name'";
            $data=$this->db->query($sql);
            return $data->result();
        }

    }