<?php
/**
 * Created by PhpStorm.
 * Edit by ChenZhixin
 */
    class Coachandplace_model extends CI_Model{

        private $table_name = 'coachandplace';

        public function __construct(){
            parent::__construct();
        }

        /**
         * 根据地点id查找信息
         * @param $data
         * @return bool
         */
        public function get_by_placeid($data){
            $this->db->where($data);
            $this->db->from($this->table_name);
            $result = $this->db->get();
            if ($result->num_rows() > 0) {
                return $result->result_array();
            }
            return false;
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
            if($where){
                $this->db->where($where);
            }else{
                $this->db->select();
            }
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
            $this->db->select("*");
            $result = $this->db->get($this->table_name);
            if ($result->num_rows() > 0) {
                return $result->result_array();
            }
            return false;
        }

        public function search($offset,$limit){
            //$sql = 'SELECT place.name,coach.name FROM ((coachandplace JOIN place ON coachandplace.placeid=place.id) JOIN coach ON coachandplace.coachid=coach.id) limit ?,?;';
            $sql = 'SELECT cp.id,p.name as pname,c.name as cname,t.time FROM (((coachandplace as cp JOIN place as p ON cp.placeid=p.id) JOIN coach  as c ON cp.coachid=c.id)JOIN time  as t ON cp.timeid=t.id) limit ?,?;';
            $result = $this->db->query($sql,array($offset,$limit));
            if ($result->num_rows() > 0) {
                return $result->result_object();
            }
            return false;
        }

        public function add($data){
            $result = $this->db->insert($this->table_name,$data);
            return $result;
        }

        public function del($where){
            $this->db->where($where);
            $this->db->from($this->table_name);
            $result = $this->db->delete();
            return $result;
        }

        public function find($offset,$limit,$placeid,$coachid,$timeid){
            //$sql = 'SELECT place.name,coach.name FROM ((coachandplace JOIN place ON coachandplace.placeid=place.id) JOIN coach ON coachandplace.coachid=coach.id) limit ?,?;';
            $sql = 'SELECT cp.id,p.name as pname,c.name as cname,t.time FROM (((coachandplace as cp JOIN place as p ON cp.placeid=p.id) JOIN coach  as c ON cp.coachid=c.id)JOIN time  as t ON cp.timeid=t.id) where cp.placeid = ? AND cp.coachid=? AND cp.timeid=? limit ?,? ;';
            $result = $this->db->query($sql,array($placeid,$coachid,$timeid,$offset,$limit,));
            if ($result->num_rows() > 0) {
                return $result->result_object();
            }
            return $result;
        }
    }