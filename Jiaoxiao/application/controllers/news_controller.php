<?php

/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/16
 * Time: 21:43
 */
class news_controller extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('news_model','news');
        $this->load->model('admin_model','admin');
        $this->load->library('pagination');
    }

    /**
     * �������������Ϣ�ĺ�̨ҳ��
     * @param string $id ����Ա��ID
     */
    public function admin($id){
        $dataAdmin=$this->admin->getAdminInfoById($id);//��ȡ��¼����ԱID
        $list['dataAdmin']=$dataAdmin;

        $pagesize=10;
        $where['deleted']=0;
        $count=$this->news->count($where);
        $config['base_url']=site_url('news_controller/admin/'.$dataAdmin->id);
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='>>';
        $config['prev_link']='<<';
        $config['first_link']='��ҳ';
        $config['last_link']='βҳ';
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

        $this->layout->view('/news/admin',$list);
    }

    /**
     * �������ӵ�������Ϣ
     * @param string $id ����Ա��ID
     */
    public function create($id){
        $data['title']=$this->input->post('title');
        $data['link']=$this->input->post('link');
        $data['content']=$this->input->post('content');

        if(!isset($data['title'])&&!isset($data['link'])&&!isset($data['content'])){
            $dataAdmin=$this->admin->getAdminInfoById($id);//��ȡ��¼����ԱID
            $list['dataAdmin']=$dataAdmin;
            $this->layout->view('/news/create',$list);
        }else{
            $data['create_date']=date('Y-m-d H:i:s');
            $data['create_id']=$id;
            $this->news->insert($data);
            $this->admin($id);
        }
    }

    /**
     * ɾ��ָ����������Ϣ
     * @param string $newsID ������Ϣ��ID
     * @param string $adminID ����Ա��ID
     */
    public function delete($newsID,$adminID){
        $where['id']=$newsID;
        $this->news->delete($where);
        $this->admin($adminID);
    }

    /**
     * ����ָ����������Ϣ
     * @param string $newsID ������Ϣ��ID
     * @param string $adminID ����Ա��ID
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
            $dataAdmin=$this->admin->getAdminInfoById($adminID);//��ȡ��¼����ԱID
            $list['dataAdmin']=$dataAdmin;
            $list['result']=$result;
            $this->layout->view('/news/update',$list);
        }else{
            $this->news->update($data,$where);
            $this->view($newsID,$adminID);
        }
    }

    /**
     * �鿴ָ����������Ϣ
     * @param string $newsID ������Ϣ��ID
     * @param string $adminID ����Ա��ID
     */
    public function view($newsID,$adminID){
        $where['id']=$newsID;
        $result=$this->news->select($where);
        $dataAdmin=$this->admin->getAdminInfoById($adminID);//��ȡ��¼����ԱID
        $list['dataAdmin']=$dataAdmin;
        $list['result']=$result;
        $this->layout->view('/news/view',$list);
    }

}