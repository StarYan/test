<?php

/**
 * Class SchoolRegister_model
 * This is the model class for table "school_register"
 *
 * The followings are the available columns in table 'school_register':
 *
 */


class SchoolRegister_model extends CI_Model{
    private $table_name = 'school_register';

    /**
     *调用父类的构造函数
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * 添加数据
     * @param $data
     * @return bool
     */
    public function insert($data){
        if($this->db->insert($this->table_name,$data)){
             return true;
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
     * 查询数据
     * @param array $where
     * @param int $limit
     * @param int $offset
     * @param bool|false $partialMatch 如果为true则为模糊搜索
     * @return bool
     */
    public function search($where=array(),$limit=0,$offset=0){
        $this->db->from($this->table_name);
        if(!empty($where)){
            $this->db->where($where);
        }
        $this->db->where('deleted',0);
        $this->db->limit($limit,$offset);
        $query = $this->db->get();
        if ($query) {
            return $query->result_array();
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
            return $query->result_array();
        }
        return false;
    }


    /**
     * 修改数据
     * @param $data
     * @param $where
     * @return bool
     */
    public function update($data,$where){
        $this->db->where($where);
        $this->db->where('deleted',0);
        if($this->db->update($this->table_name,$data)){
            return true;
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
        $this->db->where('deleted',0);
        $this->db->from($this->table_name);
        return $this->db->count_all_results();
    }


}