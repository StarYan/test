<?php
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
 * @property string $title
 * @property string $content
 * @property string $link
 * @property integer $create_id
 * @property string $create_date
 * @property string $delete
 */

class News_model extends CI_Model{
    private $table_name='news';
    /**
     *调用父类的构造函数
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * 插数据到'news'表
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
        $query=$this->db->get_where($this->table_name,$where,$offset,$limit);
        return $query->result_array();
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