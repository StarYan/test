<?php

/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/16
 * Time: 21:43
 */
class Manage_news extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('news_model','news');
        $this->load->model('admin_model','admin');
        $this->load->library('pagination');
    }

    /**
     * 加载添加新闻信息的后台页面
     * @param string $id 管理员的ID
     */
    public function admin($id){
        $dataAdmin=$this->admin->getAdminInfoById($id);//获取登录管理员ID
        $list['dataAdmin']=$dataAdmin;

        $pagesize=10;
        $where['deleted']=0;
        $count=$this->news->count($where);
        $config['base_url']=site_url('manage_news/admin/'.$dataAdmin->id);
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
        $result = $this->news->select($where,$offset,$pagesize);

        $list['result']=$result;
        $list['dataAdmin']=$dataAdmin;
        $list['link']=$this->pagination->create_links();

        $this->layout->view('/manage/manage_news/admin',$list);
    }

    /**
     * 保存增加的新闻信息
     * @param string $id 管理员的ID
     */
    public function create($id){
        $data['title']=$this->input->post('title');
        $data['link']=$this->input->post('link');
        $data['content']=$this->input->post('content');

        if(!isset($data['title'])&&!isset($data['link'])&&!isset($data['content'])){
            $dataAdmin=$this->admin->getAdminInfoById($id);//获取登录管理员ID
            $list['dataAdmin']=$dataAdmin;
            $this->layout->view('/manage/manage_news/create',$list);
        }else{
            $data['create_date']=date('Y-m-d H:i:s');
            $data['create_id']=$id;
            $this->news->insert($data);
            $this->admin($id);
        }
    }

    /**
     * 删除指定的新闻信息
     * @param string $newsID 新闻信息的ID
     * @param string $adminID 管理员的ID
     */
    public function delete($newsID,$adminID){
        $where['id']=$newsID;
        $this->news->delete($where);
        $this->admin($adminID);
    }

    /**
     * 更改指定的新闻信息
     * @param string $newsID 新闻信息的ID
     * @param string $adminID 管理员的ID
     */
    public function update($newsID,$adminID){
        $where['id']=$newsID;
        $data['title']=$this->input->post('title');
        $data['link']=$this->input->post('link');
        $data['content']=$this->input->post('content');
        $data['create_date']=date('Y-m-d H:i:s');
        $data['create_id']=$adminID;

        if(!isset($data['title'])&&!isset($data['link'])&&!isset($data['content'])){
            $result=$this->news->select($where);
            $dataAdmin=$this->admin->getAdminInfoById($adminID);//获取登录管理员ID
            $list['dataAdmin']=$dataAdmin;
            $list['result']=$result;
            $this->layout->view('/manage/manage_news/update',$list);
        }else{
            $this->news->update($data,$where);
            $this->view($newsID,$adminID);
        }
    }

    /**
     * 查看指定的新闻信息
     * @param string $newsID 新闻信息的ID
     * @param string $adminID 管理员的ID
     */
    public function view($newsID,$adminID){
        $where['id']=$newsID;
        $result=$this->news->select($where);
        $dataAdmin=$this->admin->getAdminInfoById($adminID);//获取登录管理员ID
        $list['dataAdmin']=$dataAdmin;
        $list['result']=$result;
        $this->layout->view('/manage/manage_news/view',$list);
    }

    /**
     * 把新闻信息显示到入口页面
     */
    public function show(){
        $where['deleted']=0;
        $result=$this->news->select($where);
        if($result){
            return $this->send_json(true,"",$result);
        }
        else{
            return $this->send_json(false,"读取新闻信息失败");
        }
    }

}