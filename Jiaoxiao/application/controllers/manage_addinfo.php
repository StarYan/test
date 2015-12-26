<?php

/**
 * 教练场地信息添加
 */
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
            $this->load->model('cartype_model');
            $this->load->model('time_model');//加个时间表
            $this->load->model('coachandplace_model');//加个时间id列
        }

        public function index(){
            $list['AddInfo_class']='active';
            $this->layout->view('/manage/addinfo_view',$list);
        }

        /**
         * 提交地点信息
         */
        public function addplace(){
            //上传照片
            $config['upload_path']='./uploads/';
            $config['allowed_types']='png|jpg|jpeg';
            $config['max_size']='40000';
            $this->load->library('upload',$config);
            $this->upload->do_upload('img');
            $img=$this->upload->data();

            $data['p_name']=$this->input->post('name',true);
            $data['address']=$this->input->post('address',true);
            $result = $this->place_model->count($data);
            if($result){
                return $this->send_json(false,'已成功提交');
            }else{
                $data['description']=$this->input->post('address_detail',true);
                $data['img']=$img['file_name'];
                if($data) {
                    $result = $this->place_model->add($data);
                    if($result){
                        return $this->send_json(true,'成功');
                    }
                    return $this->send_json(false,'失败');
                }
                return $this->send_json(false,'提交失败');
            }
        }

        /**
         * 提交教练信息
         */
        public function addcoach(){

            //上传照片
            $config['upload_path']='./uploads/';
            $config['allowed_types']='png|jpg|jpeg';
            $config['max_size']='40000';
            $this->load->library('upload',$config);
            $this->upload->do_upload('coach_img');
            $img=$this->upload->data();

            $data['c_name']=$this->input->post('coachname',true);
            $data['tel']=$this->input->post('phone',true);
            $data['price']=$this->input->post('money',true);
            $data['description']=$this->input->post('coach_detail',true);
            $result = $this->coach_model->count($data);
            if($result){
                return $this->send_json(false,'已成功提交');
            }else {
                $data['img'] = $img['file_name'];
                if ($data) {
                    $result = $this->coach_model->add($data);
                    if ($result) {
                        return $this->send_json(true, '成功');
                    }
                    return $this->send_json(false, '失败');
                }
                return $this->send_json(false, '提交失败');
            }
        }

        /**
         * 提交教练信息
         */
        public function addcartype()
        {
            //上传照片
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['max_size'] = '40000';
            $this->load->library('upload', $config);
            $this->upload->do_upload('car_img');
            $img = $this->upload->data();

            $data['type'] = $this->input->post('type', true);
            $data['number'] = $this->input->post('number', true);
            $data['car_detail'] = $this->input->post('car_detail', true);
            $result = $this->cartype_model->count($data);
            if ($result) {
                return $this->send_json(false, '已成功提交');
            } else {
                $data['img'] = $img['file_name'];
                if ($data) {
                    $result = $this->cartype_model->add($data);
                    if ($result) {
                        return $this->send_json(true, '成功');
                    }
                    return $this->send_json(false, '失败');
                }
                return $this->send_json(false, '提交失败');
            }
        }
    }
