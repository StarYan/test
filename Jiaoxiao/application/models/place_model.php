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
        public function get($where, $offset=0, $limit=0, $order_by = '') {
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

        /**
         * Updates a particular model
         * @param array $data 需要更新的数据数组
         * @param array $where 条件数据数组
         */
        public function update($data,$where){
            $this->db->update($this->table_name,$data,$where);
        }

        public function getInfo($where){
            $result=$this->db->get_where($this->table_name,$where);
            if ($result->num_rows() > 0) {
                return $result->result_array();
            }
            return false;
        }

        /**
         * 把数据的deleted的值改为1，不显示该数据
         * @param $where
         * @return bool
         */
        public function delete($where){
            if($where){
                if($this->db->update($this->table_name,array('deleted'=>1),$where)){
                    return true;
                }
                return false;
            }
            return false;
        }

        /**
         * 模糊查询数据
         * @param array $where
         * @param int $limit
         * @param int $offset
         * @return bool
         */
        public function fuzzy_search($where=array(),$limit=0,$offset=0){
            $this->db->from($this->table_name);
            if(!empty($where)){
                $this->db->like($where);
            }
            $this->db->where('deleted',0);
            $this->db->limit($limit,$offset);
            $query = $this->db->get();
            if ($query) {
                return $query->result_object();
            }
            return false;
        }

    }