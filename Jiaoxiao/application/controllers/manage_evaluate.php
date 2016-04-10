<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/26
 * Time: 9:07
 * 后台评价管理
 */
class Manage_evaluate extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('evaluate_model','evaluate');
        $this->load->library('pagination');
        $this->load->library('layout');
    }

    public function index(){
        $pagesize=10;
        $where['evaluate.deleted']=0;
        $count=$this->evaluate->count($where);
        $config['base_url']=site_url('/manage_evaluate/index/');
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
        $result = $this->evaluate->getById($where,$offset,$pagesize);
        $list['Evaluate_class']='active';

        $list['result']=$result;
        $list['link']=$this->pagination->create_links();

        $this->layout->view('/manage/evaluate_view',$list);
    }

}