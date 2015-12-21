<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/12
 * Time: 15:30
 */

/**
 * Class Evaluate_model
 * This is the model class for table "Evaluate"
 *
 * The followings are the available columns in table 'Evaluate':
 * @property string $id
 * @property string $user_id
 * @property string $coach_id
 * @property integer $start
 * @property string $remark
 * @property string $create_date
 * @property integer $deleted
 */

class Evaluate_model extends CI_Model{
    private $table_name = 'evaluate';

    /**
     *调用父类的构造函数
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * 插入数据到表'Evaluate'
     * @param array $data 需要插入的数据数组
     */
    public function insert($data){
        $query=$this->db->insert($this->table_name,$data);
        return $query;
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
        $query=$this->db->get_where($this->table_name,$where,$limit,$offset);
        return $query->result_array();
    }


}