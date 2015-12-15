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
            $this->db->where('userid',$data['userid']);
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

        public function getById($offset='',$limit=''){
            $this->db->from($this->table_name);
            $this->db->join('user','appointment.userid=user.id');
            $this->db->join('cartype','appointment.carid=cartype.id');
            $this->db->join('coachandplace','appointment.coachandplaceid=coachandplace.id');
            $this->db->join('place','place.id=coachandplace.placeid');
            $this->db->join('coach','coach.id=coachandplace.coachid');
            $this->db->join('time','time.id=coachandplace.timeid');
            if($limit&&$offset){
                $this->db->limit($limit,$offset);
            }

            $result = $this->db->get();
            if ($result->num_rows() > 0) {
                return $result->result_object();
            }
            return false;
        }

        /**
         * 按条件统计返回数量
         * @param array $where 查询条件
         * @return Int
         */
        public function count($where=array()) {
            if($where){
                $this->db->where($where);
            }else{
                $this->db->select();
            }
            $this->db->from($this->table_name);
            return $this->db->count_all_results();
        }
    }