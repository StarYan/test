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

    /**
     * @param array $where
     * @return int
     */
    public function count($where=array()){
        if($where){
            $this->db->where($where);
        }else{
            $this->db->select();
        }
        $this->db->from($this->table_name);
        return $this->db->count_all_results();
    }

    /**
     * 获取星星的总数
     * @param array $where
     * @return mixed
     */
    public function starSum($where=array()){
        $this->db->where($where);
        $this->db->select_sum('star');
        $query = $this->db->get($this->table_name);
        return $query->row();
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
        $this->db->select('evaluate.id,c_name,user.name,evaluate.create_date,evaluate.star,evaluate.remark,evaluate.deleted');
        $this->db->join('user','evaluate.user_id=user.id');
        $this->db->join('coach','evaluate.coach_id=coach.id');
        $this->db->limit($limit,$offset);


        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_object();
        }
        return false;
    }


}