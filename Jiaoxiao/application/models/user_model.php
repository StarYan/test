<?php
/**
 * Created by PhpStorm.
 * Edit by ChenZhixin
 */

/**
 * Class User_model
 * This is the model class for table "User"
 *
 * The followings are the available columns in table 'User':
 * @property string $id
 * @property string $name
 * @property string $num
 * @property string $password
 * @property integer $sex
 * @property string $birthday
 * @property string $phone
 * @property string $qq
 * @property string $address
 * @property string $email
 * @property string $idcard
 * @property string $photo
 * @property string $original_car_type
 * @property string $wanted_car_type
 * @property string $create_date
 * @property string $create_id
 * @property integer $status
 * @property integer $deleted
 */
    class User_model extends CI_Model
    {

        private $table_name = 'user';

        public function __construct()
        {
            parent::__construct();
        }

        /**
         * ����������
         * @param array $where ��ѯ����
         * @param int $offset ��ʼ����
         * @param int $limit ��ѯ����
         * @param string $order_by �����ֶ� ex: name desc
         */
        public function get($where, $offset, $limit, $order_by = '')
        {
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
         * ������ͳ�Ʒ�������
         * @param $where
         * @return Int
         */
        public function count($where)
        {
            $this->db->where($where);
            $this->db->from($this->table_name);
            return $this->db->count_all_results();
        }


        /**
         *ͨ��$status����ȡ�û�����Ϣ(0����δ���,1������˺ϸ�,2������˲��ϸ�)
         * @param integer $status the status of the user to be gotten
         * @param integer $offset ��ʾ�ӵ�$offset����Ϣ��ʼȡ
         * @param integer $pagesize ��ʾÿҳ��ʾ$pagesize������
         * @return array information of the user
         */
        public function getStudentInfoByStatus($status,$offset,$pagesize){
            $sql="select * from user where status=$status and deleted=0 order by id limit $offset,$pagesize";
            $query=$this->db->query($sql);
            $data=$query->result();
            return $data;
        }

        /**
         *ͨ��$status����ȡ��Ӧ���û�����
         * @param integer $status the status of the user to be counted
         * @return integer the count of the user
         */
        public function getUserCountByStatus($status){
            $query=$this->db->get_where('user',array('status'=>$status,'deleted'=>0));
            $count=$query->num_rows();
            return $count;
        }

        /**
         * ͨ��$id����ȡ��Ӧ���û���Ϣ
         * @param string $id get information from the id of the user
         * @return object information of the user
         */
        public function getUserInfoById($id){
            $query=$this->db->get_where('user',array('id'=>$id,'deleted'=>0));
            $data=$query->row();
            return $data;
        }

        /**
         * ͨ��$id���ı��Ӧ���û�״̬
         * @param string $id change status from the id of the user
         * @param integer $status ��Ҫ�ı��״̬
         */
        public function changeStatusById($id,$status){
            $sql="update user set status=$status where id=$id";
            $this->db->query($sql);
        }

    }
    	

