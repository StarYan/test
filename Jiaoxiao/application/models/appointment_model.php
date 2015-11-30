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

        public function update($data){
            $this->db->where('name',$data['name']);
            $this->db->update($this->table_name,$data);
        }

        public function get($where){
            $this->db->where($where);
            $this->db->from($this->table_name);
            $result = $this->db->get();
            if ($result->num_rows() > 0) {
                return true;
            }
            return false;
        }

        public function add($data){
            return $this->db->insert($this->table_name,$data);
        }
    }