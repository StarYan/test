<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/6
 * Time: 15:28
 */

class Register extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model','user');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('cookie');

    }

    /**
     * 加载网上报名页面
     */
    public function GoRegister(){
        $this->load->view('/register/register_view');
    }

    /**
     * 检测账号名是否已经存在的ajax接口
     */
    public function CheckNickname(){
        $where['nickname']=$this->input->post('nickname',true);
        $num=$this->user->count($where);
        if($num){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }

    /**
     * 保存用户的报名信息
     * @param string $nickname 账号名
     * @param string $password 账号密码
     * @param string $name 用户姓名
     * @param string $sex 性别
     * @param string $birthday 用户出生日期
     * @param string $id 用户身份证号码
     * @param string $phone 手机号码
     * @param string $qq QQ号码
     * @param string $email 用户邮箱地址
     * @param string $address 用户地址
     * @param string $img 身份证照片信息
     */
    public function Save(){
        //上传照片
        $config['upload_path']='./uploads/';
        $config['allowed_types']='png|jpg|jpeg';
        $config['max_size']='40000';
        $this->load->library('upload',$config);
        $this->upload->do_upload('img');
        $img=$this->upload->data();



        $data['nickname']=$_POST['nickname'];
        $data['password']=$_POST['password'];
        $data['name']=$_POST['name'];
        $sex=$_POST['sex'];
        if(strcmp($sex,"男")){
            $data['sex']=1;
        }else{
            $data['sex']=0;
        }
        $data['wanted_car_type']=$_POST['wanted_car_type'];
        $data['birthday']=$_POST['birthday'];
        $data['idcard']=$_POST['id'];
        $data['phone']=$_POST['phone'];
        $data['qq']=$_POST['qq'];
        $data['email']=$_POST['email'];
        $data['address']=$_POST['address'];
        $data['photo']=$img['file_name'];
        $data['create_date']=date('Y-m-d H:i:s');

        $timeStamp = time();
        $mdv=md5($data['idcard'].$timeStamp);
        $mdv1 = substr($mdv,0,16);
        $mdv2 = substr($mdv,16,32);
        $crc1 = abs(crc32($mdv1));
        $crc2 = abs(crc32($mdv2));
        $data['num']=bcmul($crc1,$crc2);
        $data['create_id']=$data['num'];
        $result=$this->user->save($data);
        if($result){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
    }

    /**
     * 用户登录
     */
    public function Login(){

        $nickname = $this->input->post('user_nickname',true);
        $password = $this->input->post('user_password',true);
        $checked = $this->input->post('check',true);
        if($nickname&&$password){
            $data['nickname'] = $nickname;
            $data['password'] = $password;
            if($this->checklogin()){
                $this->session->sess_destroy();
            }
            $result = $this->user->get_by_name_and_pwd($data);
            if($result){
                if($checked){
                    $this->input->set_cookie("nickname",$nickname,3600*24*365);
                }else{
                    delete_cookie("nickname");
                }
                $_SESSION = $result;
                return $this->send_json(true,'');
            }
            return $this->send_json(false,'请确认您的账号或者密码是否填写正确');
        }
        return $this->send_json(false,'请填写您的账号或者密码');

    }

    /**
     * 用户注销
     */
    public function logout(){
        $this->session->sess_destroy();
        return $this->send_json(true,"注销成功");
    }

}