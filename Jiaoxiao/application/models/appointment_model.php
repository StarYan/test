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

        /**
         * 更新数据
         * @param $data
         */
        public function update($data){
            $this->db->where('userid',$data['userid']);
            $this->db->update($this->table_name,$data);
        }

        /**
         * 获取数据
         * @param $where
         * @return bool
         */
        public function get($where){
            $this->db->where($where);
            $this->db->from($this->table_name);
            $result = $this->db->get();
            if ($result->num_rows() > 0) {
                return true;
            }
            return false;
        }

        /**
         * 添加数据
         * @param $data
         * @return CI_DB_active_record
         */
        public function add($data){
            return $this->db->insert($this->table_name,$data);
        }

        /**
         * @param array $where
         * @param string $offset
         * @param string $limit
         * @return bool
         */
        public function getById($where=array(),$offset='',$limit=''){
            $this->db->where($where);
            $this->db->from($this->table_name);
            $this->db->join('user','appointment.userid=user.id');
            $this->db->join('cartype','appointment.carid=cartype.id');
            $this->db->join('coachandplace','appointment.coachandplaceid=coachandplace.id');
            $this->db->join('place','place.id=coachandplace.placeid');
            $this->db->join('coach','coach.id=coachandplace.coachid');
            $this->db->join('time','time.id=coachandplace.timeid');
            $this->db->limit($limit,$offset);


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

        /**
         * 把数据的a_deleted的值改为1，表示已经删除该数据
         * @param $where
         * @return bool|CI_DB_active_record
         */
        public function delete($where){
            if($where){
                $result = $this->db->update($this->table_name,array('a_deleted'=>1),$where);
                return $result;
            }
            return false;
        }
    }