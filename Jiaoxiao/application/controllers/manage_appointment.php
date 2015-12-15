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
            $this->load->model('coach_model');
            $this->load->model('place_model');
            $this->load->model('time_model');//加个时间表
            $this->load->model('coachandplace_model');//加个时间id列
            $this->load->model('appointment_model');
        }

        /**
         * 预约后台界面
         */
        public function index($id){
            $dataAdmin=$this->admin->getAdminInfoById($id);//获取登录管理员ID
            $list['dataAdmin']=$dataAdmin;
            /*----------------------------------------------------*/
            $pagesize=3;
            $count=$this->coachandplace_model->count("");
            $config['base_url']=site_url('manage_appointment/index/'.$dataAdmin->id);
            $config['total_rows']=$count;
            $config['per_page']=$pagesize;
            $config['next_link']='>>';
            $config['prev_link']='<<';
            $config['first_link']='首页';
            $config['last_link']='尾页';
            $config['full_tag_open']="<ul class='pagination pagination-lg pagination-colory'>";
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
            $offset=intval($this->uri->segment(4));
            $this->pagination->initialize($config);
            //$result = $this->coachandplace_model->get("",$offset,$pagesize);
            $result = $this->coachandplace_model->search($offset,$pagesize);

            $list['result']=$result;
            $list['dataAdmin']=$dataAdmin;
            $list['link']=$this->pagination->create_links();

            $this->layout->view('/manage/appointment_view',$list);
        }

        public function find(){
            $placeid = $this->input->post('searchplace');
            $coachid = $this->input->post('searchcoach');
            $timeid = $this->input->post('searchtime');
            $data = array('placeid' => $placeid,'coachid'=> $coachid,'timeid'=>$timeid);
            $id = $this->input->post('adminid');
            $dataAdmin=$this->admin->getAdminInfoById($id);//获取登录管理员ID
            $list['dataAdmin']=$dataAdmin;
            /*----------------------------------------------------*/
            $pagesize=3;
            $count=$this->coachandplace_model->count($data);
            $config['base_url']=site_url('manage_appointment/index/'.$dataAdmin->id);
            $config['total_rows']=$count;
            $config['per_page']=$pagesize;
            $config['next_link']='>>';
            $config['prev_link']='<<';
            $config['first_link']='首页';
            $config['last_link']='尾页';
            $config['full_tag_open']="<ul class='pagination pagination-lg pagination-colory'>";
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
            $offset=intval($this->uri->segment(4));
            $this->pagination->initialize($config);
            //$result = $this->coachandplace_model->get("",$offset,$pagesize);
            if($count){
                $result = $this->coachandplace_model->find($offset,$pagesize,$placeid,$coachid,$timeid);
            }else{
                $result = 0;
            }


            $list['result']=$result;
            $list['dataAdmin']=$dataAdmin;
            $list['link']=$this->pagination->create_links();

            $this->layout->view('/manage/appointment_view',$list);
        }

        /**
         * 添加预约项
         */
        public function saveappoint(){
            $data['placeid'] = $this->input->post('placeid');
            $data['coachid'] = $this->input->post('coachid');
            $data['timeid'] = $this->input->post('timeid');
            if(!$this->coachandplace_model->count($data)){
                $result = $this->coachandplace_model->add($data);
                if($result){
                    return $this->send_json(true,'成功');
                }else{
                    return $this->send_json(false,'失败');
                }
            }
            return $this->send_json(false,'已存在');
        }

        /**
         * 查看学员预约的信息汇总
         */
        public function appointmentInfo($id){
            $dataAdmin=$this->admin->getAdminInfoById($id);//获取登录管理员ID
            $list['dataAdmin']=$dataAdmin;
            /*----------------------------------------------------*/
            $pagesize=10;
            $count=$this->appointment_model->count();
            $config['base_url']=site_url('manage_appointment/appointmentInfo/'.$dataAdmin->id);
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
            $offset=intval($this->uri->segment(4));
            $this->pagination->initialize($config);
            $result = $this->appointment_model->getById($offset,$pagesize);

            $list['result']=$result;
            $list['dataAdmin']=$dataAdmin;
            $list['link']=$this->pagination->create_links();

            $this->layout->view('/manage/appointmentInfo_view',$list);
        }

        /**
         *ajax接口返回地点
         */
        public function getplace(){
            $result = $this->place_model->getall();
            if($result){
                return $this->send_json(true,'成功',$result);
            }else{
                return $this->send_json(false,'失败');
            }
        }

        /**
         * ajax接口返回教练
         */
        public function getcoach(){
            $result = $this->coach_model->getall();
            if($result){
                return $this->send_json(true,'成功',$result);
            }else{
                return $this->send_json(false,'失败');
            }
        }

        /**
         * ajax删除
         */
        public function delete(){
            $data['id']=$this->input->post('id',true);
            $result = $this->coachandplace_model->del($data);
            if($result){
                return $this->send_json(true,'成功',$result);
            }else{
                return $this->send_json(false,'失败');
            }
        }

        public function modify(){
            $data['id']=$this->input->post('id',true);

        }

    }
