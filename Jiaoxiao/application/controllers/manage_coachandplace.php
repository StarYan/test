<?php

/**
* 后台教练场地管理
*/
class Manage_coachandplace extends MY_Controller{
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
    public function index(){

        $pagesize=3;
        $count=$this->coachandplace_model->count("");
        $config['base_url']=site_url('manage_coachandplace/index/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='>>';
        $config['prev_link']='<<';
        $config['first_link']='首页';
        $config['last_link']='尾页';
        $config['full_tag_open']="<ul class='pagination pagination-colory'>";
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
        $result = $this->coachandplace_model->search($offset,$pagesize);
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['CoachAndPlace_class']='active';

        $this->layout->view('/manage/coachandplace_view',$list);
    }

    public function find(){
        $placeid = $this->input->post('searchplace');
        $coachid = $this->input->post('searchcoach');
        $timeid = $this->input->post('searchtime');
        $data = array('placeid' => $placeid,'coachid'=> $coachid,'timeid'=>$timeid);

        $pagesize=3;
        $count=$this->coachandplace_model->count($data);
        $config['base_url']=site_url('manage_coachandplace/index/');
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
        $offset=intval($this->uri->segment(3));
        $this->pagination->initialize($config);
        if($count){
            $result = $this->coachandplace_model->find($offset,$pagesize,$placeid,$coachid,$timeid);
        }else{
            $result = 0;
        }
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['CoachAndPlace_class']='active';

        $this->layout->view('/manage/coachandplace_view',$list);
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