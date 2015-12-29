<?php

/**
 * 学院预约管理
 */
    class Manage_appointment extends MY_Controller{
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
            $this->load->model('appointment_model');
        }


        /**
         * 查看学员预约的信息汇总
         */
        public function index(){

            $pagesize=10;
            $count=$this->appointment_model->count();
            $config['base_url']=site_url('manage_appointment/appointmentInfo/');
            $config['total_rows']=$count;
            $config['per_page']=$pagesize;
            $config['next_link']='>>';
            $config['prev_link']='<<';
            $config['first_link']='首页';
            $config['last_link']='尾页';
            $config['full_tag_open']="<ul class='pagination'>";
            $config['full_tag_close']="</ul>";
            $config['prev_tag_open']='<li>';
            $config['prev_tag_close']='</li>';
            $config['next_tag_open']='<li>';
            $config['next_tag_close']='</li>';
            $config['first_tag_open']='<li>';
            $config['first_tag_close']='</li>';
            $config['last_tag_open']='<li>';
            $config['last_tag_close']='</li>';
            $config['num_tag_open']='<li>';
            $config['num_tag_close']='</li>';
            $config['cur_tag_open']='<li><a>';
            $config['cur_tag_close']='</a></li>';
            $offset=intval($this->uri->segment(3));
            $this->pagination->initialize($config);
            $where['a_deleted']=0;
            $result = $this->appointment_model->getById($where,$offset,$pagesize);
            $list['result']=$result;
            $list['link']=$this->pagination->create_links();
            $list['Appointment_class']='active';

            $this->layout->view('/manage/appointment_view',$list);
        }

        /**
         * ajax删除学员预约项
         */
        public function delete(){
            $id = $this->input->post('id',true);
            $where['a_id'] = $id;
            if($id){
                $result = $this->appointment_model->delete($where);
                if($result){
                    return $this->send_json(true,'成功删除');
                }
                return $this->send_json(false,'删除失败');
            }
            return $this->send_json(false,'失败');
        }

    }
