<?php
    class Manage_addinfo extends MY_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('layout');
            $this->load->helper('url');
            $this->load->library('pagination');
            $this->load->model('user_model','user');
            $this->load->model('admin_model','admin');
            $this->load->model('checked_model','checked');
            $this->load->model('coach_model');
            $this->load->model('place_model');
            $this->load->model('time_model');//加个时间表
            $this->load->model('coachandplace_model');//加个时间id列
        }

        public function index($id){
            $dataAdmin=$this->admin->getAdminInfoById($id);//获取登录管理员ID
            $list['dataAdmin']=$dataAdmin;
            /*----------------------------------------------------*/
            $list['dataAdmin']=$dataAdmin;
            $this->layout->view('/manage/addinfo_view',$list);
        }

        /**
         * 提交地点信息
         */
        public function addplace(){
            $dataAdmin=$this->input->post('adminid',true);//获取登录管理员ID
            $list['dataAdmin']=$dataAdmin;
            /*----------------------------------------------------*/
            $list['dataAdmin']=$dataAdmin;

            //上传照片
            $config['upload_path']='./uploads/';
            $config['allowed_types']='png|jpg|jpeg';
            $config['max_size']='40000';
            $this->load->library('upload',$config);
            $this->upload->do_upload('img');
            $img=$this->upload->data();

            $data['name']=$this->input->post('name',true);
            $data['address']=$this->input->post('address',true);
            $data['description']=$this->input->post('address_detail',true);

            $data['img']=$img['file_name'];
            if($data) {
                $result = $this->place_model->add($data);
            }

            //因图片无法用ajax提交暂用这种方法处理提交
            redirect(site_url('/manage_addinfo/index/'.$dataAdmin));
        }

    }
