<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/28
 * Time: 22:17
 */

/**
 * Class Checked_model
 * This is the model class for table "Checked"
 *
 * The followings are the available columns in table 'Checked':
 * @param string $id
 * @param string $admin_id
 * @param string $user_id
 * @param string $remark
 * @param integer $deleted
 */
class Checked_model extends CI_Model{
    /**
     *调用父类的构造函数
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * 把$admin_id,$user_id,$remark插入到'checked'表中
     * @param string $admin_id 管理员id
     * @param string $user_id 用户id
     * @param string $remark 审核信息
     * @param string $create_date 审核时间
     */
    public function insertInfo($admin_id,$user_id,$remark,$create_date){
        $sql="insert into checked(admin_id,user_id,remark,create_date) values($admin_id,$user_id,'$remark','$create_date')";
        $this->db->query($sql);
    }

    /**
     * 通过$user_id获取审核的信息
     * @param string $user_id 用户的id
     * @return object $data
     */
    public function getInfoByUserId($user_id){
        $query=$this->db->get_where('checked',array('user_id'=>$user_id));
        $data=$query->row();
        return $data;
    }


}