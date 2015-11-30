<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/19
 * Time: 14:18
 */
    class Appointment_model extends CI_Model{
        private $table_name = 'appointment';

        public function __construct(){
            parent::__construct();
        }

        public function add($data){
            return $this->db->insert($this->table_name,$data);
        }
    }