<?php
/**
 * Created by PhpStorm.
 * 用户预约模块
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

        /**
         * 进入预约登录页面
         */
        public function index($flag=""){
            if($this->checklogin()){
                $this->session->sess_destroy();
            }
            if(empty($flag)){
                $this->load->view('/appointment/appointmentLogin_view');
            }else{
                $data['flag']=$flag;
                $this->load->view('/appointment/appointmentLogin_view',$data);
            }

        }

        /**
         * 进入预约页面
         */
        public function goAppointment(){
            if($this->checklogin()){
                $this->load->view('appointment/appointment_view');
            }else{
                redirect('appointment/index');
            }
        }

        /**
         * ajax接口查找所有场地
         */
        public function allPlace(){
            $result = $this->place_model->getall();
            return $this->send_json(true,"",$result);
        }

        /**
         * ajax接口查找所有教练
         */
        public function allCoach(){
            $result = $this->coach_model->getall();
            return $this->send_json(true,"",$result);
        }

        /**
         * ajax接口查找所有时间段
         */
        public function allTime(){
            $result = $this->time_model->getall();
            return $this->send_json(true,"",$result);
        }

        /**
         * ajax接口查找所有车型
         */
        public function allCar(){
            $result = $this->cartype_model->getall();
            return $this->send_json(true,"",$result);
        }

        /**
         * ajax接口查找教练
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
         * ajax接口根据教练id查找对应的场地信息和时间信息
         */
        public function placeAndTime(){
            $coachID = $this->input->post('coachID',true);

            if($coachID){
                $data['id'] = $coachID;
                $coachInfo=$this->coach_model->select($data);
                $list['coachInfo']=$coachInfo;
                return $this->send_json(true,"",$list);
            }
        }

        /**
         * ajax接口获取车辆信息
         */
        public function carInfo(){
            $carID = $this->input->post('carID',true);

            if($carID){
                $data['id'] = $carID;
                $carInfo=$this->cartype_model->getInfo($data);
                $list['carInfo']=$carInfo;
                return $this->send_json(true,"",$list);
            }
        }

        /**
         * ajax预约提交
         */
        public function saveappointment(){
            if(!$this->input->post('userID',true)){
                return $this->send_json(false,'请先登录');
            }else{
                $userid = $this->input->post('userID',true);
                $placeID=$this->input->post('placeID',true);
                $coachID=$this->input->post('coachID',true);
                $carID=$this->input->post('carID',true);
                $timeID=$this->input->post('timeID',true);

                if($placeID&&$coachID&&$carID&&$timeID){
                    $data['placeID'] = $placeID;
                    $data['coachID'] = $coachID;
                    $data['timeID'] = $timeID;
                    $dataCoachAndPlace=$this->coachandplace_model->get_by_id($data);
                    $coachandplace_id=$dataCoachAndPlace[0]['id'];
                    $where['userid'] = $userid;
                    $where['coachandplaceid']=$coachandplace_id;
                    $where['carid']=$carID;

                    if($this->appointment_model->get($where)){
                        $this->appointment_model->update($where);
                    }else{
                        $this->appointment_model->add($where);
                    }
                    return $this->send_json(true,"成功");
                }
                return $this->send_json(false,"预约失败");
            }


        }

        /**
         * 用户登录
         */
        public function login(){
            $nickname = $this->input->post('nickname',true);
            $password = $this->input->post('password',true);
            if($nickname&&$password){
                $data['nickname'] = $nickname;
                $data['password'] = $password;
                $result = $this->user_model->get_by_name_and_pwd($data);
                if($result){
                    $_SESSION = $result;
                    redirect('/appointment/goAppointment');
                }else{
                    redirect(array('/appointment/index','flag'=>1));
                }
            }
        }

        /**
         * 用户注销
         */
        public function logout(){
           $this->session->sess_destroy();
           return $this->send_json(true,"注销成功");
        }

    }