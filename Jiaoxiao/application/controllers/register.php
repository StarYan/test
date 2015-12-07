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
    }

    /**
     * �������ϱ���ҳ��
     */
    public function GoRegister(){
        $this->load->view('/register/register_view');
    }

    /**
     * �����û��ı�����Ϣ
     * @param string $nickname �˺���
     * @param string $password �˺�����
     * @param string $name �û�����
     * @param string $sex �Ա�
     * @param string $birthday �û���������
     * @param string $id �û����֤����
     * @param string $phone �ֻ�����
     * @param string $qq QQ����
     * @param string $email �û������ַ
     * @param string $address �û���ַ
     * @param string $img ���֤��Ƭ��Ϣ
     */
    public function Save(){
        //�ϴ���Ƭ
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
        if(strcmp($sex,"��")){
            $data['sex']=1;
        }else{
            $data['sex']=0;
        }
        $data['original_car_type']=$_POST['original_car_type'];
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
        $this->user->save($data);
    }

}