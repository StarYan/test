<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/28
 * Time: 20:12
 */

/**
 * Class Admin_model
 * This is the model class for table "Admin"
 *
 * The followings are the available columns in table 'Admin':
 * @property string $id
 * @property string $username
 * @property string $name
 * @property string $password
 * @property string $phone
 * @property string $qq
 * @property string $create_id
 * @property string $create_date
 * @property integer $status
 * @property integer $deleted
 */
class Admin_model extends CI_Model{
    /**
     *调用父类的构造函数
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * 通过输入的$username来查admin信息
     * @param string $username the username of the administrator to get information
     * @return object value of the administrator
     */
    public function getAdminInfoByUsername($username){
        $query=$this->db->get_where('admin',array('username'=>$username));
        $data=$query->row();
        return $data;
    }

    /**
     *通过输入的$id来查询admin的所有信息
     * @param string $id the id of the administrator to get information
     * @return object value of the administrator
     */
    public function getAdminInfoById($id){
        $query=$this->db->get_where('admin',array('id'=>$id));
        $data=$query->row();
        return $data;
    }

}

