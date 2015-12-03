<?php
    class Manage_appointment extends MY_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('layout');
            $this->load->helper('url');
            $this->load->library('pagination');
            $this->load->model('user_model','user');
            $this->load->model('admin_model','admin');
            $this->load->model('checked_model','checked');
        }

        /**
         * 预约后台界面
         */
        public function index($id){
            $dataAdmin=$this->admin->getAdminInfoById($id);
            $list['dataAdmin']=$dataAdmin;
            $this->layout->view('/manage/appointment_view',$list);
        }

    }
