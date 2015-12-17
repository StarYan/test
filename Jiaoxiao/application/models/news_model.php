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
     *���ø���Ĺ��캯��
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * �����ݵ�'news'��
     * @param array $data ��Ҫ�������������
     */
    public function insert($data){
        $this->db->insert($this->table_name,$data);
    }

    /**
     * Updates a particular model
     * @param array $data ��Ҫ���µ���������
     * @param array $where ������������
     */
    public function update($data,$where){
        $this->db->update($this->table_name,$data,$where);
    }

    /**
     * �����ݵ�deleted��ֵ��Ϊ1����ʾ�Ѿ�ɾ��������
     * @param array $where ������������
     */
    public function delete($where){
        $this->db->update($this->table_name,array('deleted'=>1),$where);
    }

    /**
     * ��ѯ���е�����
     * @param array $where ������������
     * @param integer $limit �����ÿҳ��¼��
     * @param integer $offset �������ƫ��
     * @return array ����һ���������
     */
    public function select($where=array(),$limit=0,$offset=0){
        $query=$this->db->get_where($this->table_name,$where,$offset,$limit);
        return $query->result_array();
    }

    /**
     * ������ͳ�Ʒ�������
     * @param array $where ��ѯ����
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