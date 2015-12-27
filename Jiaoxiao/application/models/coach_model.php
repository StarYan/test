<?php
/**
 * Created by PhpStorm.
 * Edit by ChenZhixin
 */
    class Coach_model extends CI_Model{

        private $table_name = 'coach';

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
        public function count($where=array()) {
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
            $this->db->order_by('star','desc');
            $result = $this->db->get($this->table_name);
            if ($result->num_rows() > 0) {
                return $result->result_object();
            }
            return false;
        }

        /**
         * 添加数据到'coach'表
         * @param $data
         * @return CI_DB_active_record
         */
        public function add($data){
            $result = $this->db->insert($this->table_name,$data);
            return $result;
        }

        /**
         * 查询表中的数据
         * @param array $where 条件数据数组
         * @param integer $limit 结果集每页纪录数
         * @param integer $offset 结果集的偏移
         * @return array 返回一个结果数组
         */
        public function select($where=array(),$limit=0,$offset=0){
            $result=$this->db->get_where($this->table_name,$where,$offset,$limit);
            if ($result->num_rows() > 0) {
                return $result->result_array();
            }
            return false;
        }

        /**
         * Updates a particular model
         * @param array $data 需要更新的数据数组
         * @param array $where 条件数据数组
         */
        public function update($data,$where){
            $this->db->update($this->table_name,$data,$where);
        }

    }