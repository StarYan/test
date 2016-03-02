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

        public function get_by_name_and_pwd($data){
            $this->db->where($data);
            $this->db->from($this->table_name);
            $result = $this->db->get();
            if ($result->num_rows() > 0) {
                return $result->row_array();
            }
            return false;
        }

        /**
         * ����������
         * @param array $where ��ѯ����
         * @param int $offset ��ʼ����
         * @param int $limit ��ѯ����
         * @param string $order_by �����ֶ� ex: name desc
         */
        public function get($where, $offset=0, $limit=0, $order_by = '')
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
            $sql="select * from user where status=$status and deleted=0 order by id DESC limit $offset,$pagesize ";
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

        /**
         * �����û���Ϣ
         * @param $data
         * @return bool
         */
        public function save($data){
            if($this->db->insert('user',$data)){
                return true;
            }
            return false;
        }


        /**
         * ������˼�¼��id����˼�¼��deleted��Ϊ1��ʾ�ļ�¼��ɾ��
         * @param string $id ��˼�¼��id
         * @param string $admin_id ����Ա��id
         */
        public function deletedByUserId($user_id,$admin_id){
            $update_date=date('Y-m-d H:i:s');
            $sql="UPDATE user SET deleted=1,update_id=$admin_id,update_date='$update_date' WHERE id=$user_id";
            $this->db->query($sql);
        }

        /**
         * ģ����ѯ����
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

        /**
         * Updates a particular model
         * @param array $data ��Ҫ���µ���������
         * @param array $where ������������
         */
        public function update($data,$where){
            $this->db->update($this->table_name,$data,$where);
        }

        /**
         * �����ݵ�deleted��ֵ��Ϊ1������ʾ������
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

    }
    	

