<?php
/**
 * Created by PhpStorm.
 * �û�ԤԼģ��
 */
    class Appointment extends MY_Controller{

        public function __construct() {
            parent::__construct();
            $this->load->model('appointment_model');
            $this->load->model('place_model');
            $this->load->model('coachandplace_model');
            $this->load->model('appointment_model');
            $this->load->model('user_model');
            $this->load->model('coach_model');
            $this->load->model('time_model');
            $this->load->model('cartype_model');
        }

        public function appointmentmodel(){
            $this->load->view('appointment/appointment_view');
        }

        /**
         * ajax�ӿڲ������г���
         */
        public function allPlace(){
            $result = $this->place_model->getall();
            return $this->send_json(true,"",$result);
        }

        /**
         * ajax�ӿڲ������н���
         */
        public function allCoach(){
            $result = $this->coach_model->getall();
            return $this->send_json(true,"",$result);
        }

        /**
         * ajax�ӿڲ�������ʱ���
         */
        public function allTime(){
            $result = $this->time_model->getall();
            return $this->send_json(true,"",$result);
        }

        /**
         * ajax�ӿڲ������г���
         */
        public function allCar(){
            $result = $this->cartype_model->getall();
            return $this->send_json(true,"",$result);
        }

        /**
         * ajax�ӿڲ��ҽ���
         */
        public function coach(){
            $placeID = $this->input->post('placeID',true);
            $timeID = $this->input->post('timeID',true);
            if($placeID||$timeID){
                $data['placeid'] = $placeID;
                $data['timeid'] = $timeID;
                $result = $this->coachandplace_model->get_by_id($data);
                $place['id']=$placeID;
                $placeInfo=$this->place_model->getInfo($place);
                $list['placeInfo']=$placeInfo;
                $list['result']=$result;
                return $this->send_json(true,"",$list);
            }
        }

        /**
         * ajax�ӿڸ��ݽ���id���Ҷ�Ӧ�ĳ�����Ϣ��ʱ����Ϣ
         */
        public function placeAndTime(){
            $coachID = $this->input->post('coachID',true);

            if($coachID){
                $data['id'] = $coachID;
                $coachInfo=$this->coach_model->getInfo($data);
                $list['coachInfo']=$coachInfo;
                return $this->send_json(true,"",$list);
            }
        }

        public function carInfo(){
            $carID = 1;

            if($carID){
                $data['id'] = $carID;
                $carInfo=$this->cartype_model->getInfo($data);
                $list['carInfo']=$carInfo;
                return $this->send_json(true,"",$list);
            }
        }

        /**
         * ajaxԤԼ�ύ
         */
        public function saveappointment(){
            $coachandplaceid = $this->input->post('coachandplaceid',true);
            $userid = $this->input->post('userid',true);
            $time = $this->input->post('time',true);
            $cartype = $this->input->post('cartype',true);
            if($coachandplaceid&&$userid&&$time&&$cartype){
                $data['coachandplaceid'] = $coachandplaceid;
                $data['userid'] = $userid;
                $data['time'] = $time;
                $data['cartype'] = $cartype;

                $where['userid'] = $userid;
                if($this->appointment_model->get($where)){
                    $this->appointment_model->update($data);
                }else{
                    $this->appointment_model->add($data);
                }
                return $this->send_json(true,"�ɹ�");
            }
            return $this->send_json(false,"ԤԼʧ��");
        }

        /**
         * �û���¼
         */
        public function login(){
            $nickname = 'wenshiye';
            $password = '1';
            if($nickname&&$password){
                $data['nickname'] = $nickname;
                $data['password'] = $password;
//                if($this->checklogin()){
//                    unset($_SESSION);
//                }
                $result = $this->user_model->get_by_name_and_pwd($data);
//                $_SESSION = $result;
//                var_dump($result);
                $list['result']=$result;
                if($result){
                    return $this->send_json(true,"",$list);
                }else{
                    return $this->send_json(false,"��¼ʧ�ܣ���鿴������û����Ƿ���ȷ");
                }
            }
            return $this->send_json(false,"��¼ʧ�ܣ���鿴������û����Ƿ���ȷ");
        }

        /**
         * �û�ע��
         */
        public function logout(){
            unset($_SESSION);
            return $this->send_json(true,"ע���ɹ�");
        }

    }