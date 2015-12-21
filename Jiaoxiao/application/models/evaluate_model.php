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
     *���ø���Ĺ��캯��
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * �������ݵ���'Evaluate'
     * @param array $data ��Ҫ�������������
     */
    public function insert($data){
        $query=$this->db->insert($this->table_name,$data);
        return $query;
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
        $query=$this->db->get_where($this->table_name,$where,$limit,$offset);
        return $query->result_array();
    }


}