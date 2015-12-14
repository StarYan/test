<?php
/**
 * Created by PhpStorm.
 * Edit by ChenZhixin
 */
    class Place_model extends CI_Model{

        private $table_name = 'place';

        public function __construct(){
            parent::__construct();
        }

        /**
         * 按条件查找
         * @param array $where 查询数组
         * @param int $offset 开始条数
         * @param int $limit 查询几条
         * @param string $order_by 排序字段 ex: name desc
         */
        public function get($where, $offset, $limit, $order_by = '') {
            if (!empty($order_by)) {
                $this->db->order_by($order_by);
            }
            if (empty($where)) {
                $where = array();
            }
            $this->db->where($where);
            $this->db->from($this->table_name);
            $this->db->limit($limit, $offset);

            $result = $this->db->get();
            if ($result->num_rows() > 0) {
                return $result->result_object();
            }
            return false;
        }

        /**
         * 按条件统计返回数量
         * @param $where
         * @return Int
         */
        public function count($where) {
            $this->db->where($where);
            $this->db->from($this->table_name);
            return $this->db->count_all_results();
        }

        /**
         * @param $name
         * @return bool
         */
        public function get_place_by_name($name) {
            $where['name'] = $name;

            $result = $this->db->get_where($this->table_name, $where, 1);
            if ($result->num_rows() > 0) {
                return $result->row();
            }
            return false;
        }

        /**
         * 返回所有数据
         * @return array/bool 返回数组
         */
        public function getall(){
            $this->db->select();
            $result = $this->db->get($this->table_name);
            if ($result->num_rows() > 0) {
                return $result->result_object();
            }
            return false;
        }

        public function add($data){
            $result = $this->db->insert($this->table_name,$data);
            return $result;
        }

        public function update($data,$where){
            $result = $this->db->update($this->table_name,$data,$where);
            return $result;
        }

        public function getInfo($where){
            $result=$this->db->get_where($this->table_name,$where);
            if ($result->num_rows() > 0) {
                return $result->result_array();
            }
            return false;
        }

    }