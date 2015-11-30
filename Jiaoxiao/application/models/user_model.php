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
         * 按条件查找
         * @param array $where 查询数组
         * @param int $offset 开始条数
         * @param int $limit 查询几条
         * @param string $order_by 排序字段 ex: name desc
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
         * 按条件统计返回数量
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
         *通过$status来获取用户的信息(0代表未审核,1代表审核合格,2代表审核不合格)
         * @param integer $status the status of the user to be gotten
         * @param integer $offset 表示从第$offset条信息开始取
         * @param integer $pagesize 表示每页显示$pagesize条数据
         * @return array information of the user
         */
        public function getStudentInfoByStatus($status,$offset,$pagesize){
            $sql="select * from user where status=$status and deleted=0 order by id limit $offset,$pagesize";
            $query=$this->db->query($sql);
            $data=$query->result();
            return $data;
        }

        /**
         *通过$status来获取对应的用户数量
         * @param integer $status the status of the user to be counted
         * @return integer the count of the user
         */
        public function getUserCountByStatus($status){
            $query=$this->db->get_where('user',array('status'=>$status,'deleted'=>0));
            $count=$query->num_rows();
            return $count;
        }

        /**
         * 通过$id来获取对应的用户信息
         * @param string $id get information from the id of the user
         * @return object information of the user
         */
        public function getUserInfoById($id){
            $query=$this->db->get_where('user',array('id'=>$id,'deleted'=>0));
            $data=$query->row();
            return $data;
        }

        /**
         * 通过$id来改变对应的用户状态
         * @param string $id change status from the id of the user
         * @param integer $status 需要改变的状态
         */
        public function changeStatusById($id,$status){
            $sql="update user set status=$status where id=$id";
            $this->db->query($sql);
        }

    }
    	

