<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/6
 * Time: 15:28
 * 预约报名
 */

class Register extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model','user');
        $this->load->model('coach_model','coach');
        $this->load->model('school_model','school');
        $this->load->model('schoolRegister_model','schoolRegister');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('cookie');
        date_default_timezone_set('PRC');
    }

    /**
     * 加载网上报名页面
     */
    public function GoRegister($flag=""){
        if(empty($flag)){
            $this->load->view('/register/register_view');
        }else{
            $data['flag']=$flag;
            $this->load->view('/register/register_view',$data);
        }

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
        $data['sex']=$_POST['sex'];

        $licence=$_POST['school'];
        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];
        $data['school_id']=$school_id;
        $data['coach_id']=$this->input->post('coach',true);
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
            $flag=1;
            redirect(array('/register/GoRegister','flag'=>$flag));
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

    /**
     * 获取所有教练信息的ajax接口
     */
    public function coachInformation(){
        $coachData=$this->coach->getall();

        if($coachData){
            $this->send_json(true,'',$coachData);
        }else{
            $this->send_json(false,'没有教练信息');
        }
    }

    /**
     * 获取学校信息的ajax接口
     */
    public function schoolInformation(){
        $schoolData=$this->schoolRegister->search();

        if($schoolData){
            $this->send_json(true,'',$schoolData);
        }else{
            $this->send_json(false,'没有驾校信息');
        }
    }

    /**
     * 按驾校通过率进行排名显示
     */
    public function showSchoolByPassRate(){
        $where['deleted']=0;
        $field='pass_rate';

        $result=$this->school->orderBy($field,$where);
        if($result){
            return $this->send_json(true,"",$result);
        }
        else{
            return $this->send_json(false,"读取驾校通过率排名信息失败");
        }
    }

    /**
     * 获取指定学校的教练信息的ajax接口
     */
    public function getCoachBySchool(){
        $licence=$this->input->post('licence',true);
        $schoolWhere['licence']=$licence;
        $schoolData=$this->school->search($schoolWhere);
        $school_id=$schoolData[0]['id'];
        $coachWhere['school_id']=$school_id;
        $coachWhere['deleted']=0;
        $coachData=$this->coach->select($coachWhere);

        if($coachData){
            $this->send_json(true,'',$coachData);
        }else{
            $this->send_json(false,'没有教练信息');
        }
    }

    public function getCoachById(){
        $coachID=$this->input->post('coachID',true);
        $where['id']=$coachID;
        $data=$this->coach->select($where);

        if($data){
            $this->send_json(true,'',$data);
        }else{
            $this->send_json(false,'没有教练信息');
        }
    }

}