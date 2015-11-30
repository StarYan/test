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
     *���ø���Ĺ��캯��
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * ��$admin_id,$user_id,$remark���뵽'checked'����
     * @param string $admin_id ����Աid
     * @param string $user_id �û�id
     * @param string $remark �����Ϣ
     * @param string $create_date ���ʱ��
     */
    public function insertInfo($admin_id,$user_id,$remark,$create_date){
        $sql="insert into checked(admin_id,user_id,remark,create_date) values($admin_id,$user_id,'$remark','$create_date')";
        $this->db->query($sql);
    }

    /**
     * ͨ��$user_id��ȡ��˵���Ϣ
     * @param string $user_id �û���id
     * @return object $data
     */
    public function getInfoByUserId($user_id){
        $query=$this->db->get_where('checked',array('user_id'=>$user_id));
        $data=$query->row();
        return $data;
    }


}