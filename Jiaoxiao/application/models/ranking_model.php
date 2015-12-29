﻿<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/16
 * Time: 13:48
 */

/**
 * Class News_model
 * This is the model class for table "News"
 *
 * The followings are the available columns in table 'News':
 * @property string $id
 * @property string $school_name
 * @property string $school_address
 * @property integer $pass_rate
 * @property integer $score
 * @property string $school_tel
 * @property string $create_id
 * @property string $create_date
 * @property string $update_id
 * @property string $update_date
 * @property integer $delete
 */

class Ranking_model extends CI_Model{
    private $table_name='ranking';
    /**
     *调用父类的构造函数
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * 插数据到'ranking'表
     * @param array $data 需要插入的数据数组
     */
    public function insert($data){
        $this->db->insert($this->table_name,$data);
    }

    /**
     * Updates a particular model
     * @param array $data 需要更新的数据数组
     * @param array $where 条件数据数组
     */
    public function update($data,$where){
        $this->db->update($this->table_name,$data,$where);
    }

    /**
     * 把数据的deleted的值改为1，表示已经删除该数据
     * @param array $where 条件数据数组
     */
    public function delete($where){
        $this->db->update($this->table_name,array('deleted'=>1),$where);
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
     * 根据 $field 进行降序排列输出数据
     * @param $field
     * @param $where
     * @return bool
     */
    public function orderBy($field,$where){
        $this->db->order_by($field,'desc');
        $this->db->where($where);
        $query=$this->db->get($this->table_name);
        if($query){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

}