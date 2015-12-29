<?php
class Manage_ranking extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('ranking_model','ranking');
        $this->load->model('admin_model','admin');
        $this->load->library('pagination');
    }


    /**
     * 加载驾校排名管理的后台页面
     */
    public function admin(){
        if(empty($_SESSION['id'])){
            redirect('/manage_controller/Login');
        }

        $pagesize=10;
        $where['deleted']=0;
        $count=$this->ranking->count($where);
        $config['base_url']=site_url('manage_ranking/admin/');
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
        $result = $this->ranking->select($where,$offset,$pagesize);

        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['Ranking_class']='active';

        $this->layout->view('/manage/manage_ranking/admin',$list);
    }

    /**
     * 添加驾校管理信息
     */
    public function create(){
        if(!empty($_SESSION['id'])){
            $id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $data['school_name']=$this->input->post('school_name');
        $data['school_address']=$this->input->post('school_address');
        $data['school_tel']=$this->input->post('school_tel');
        $data['school_url']=$this->input->post('school_url');
        $data['pass_rate']=$this->input->post('pass_rate');
        $data['score']=$this->input->post('score');

        if(!isset($data['school_name'])&&!isset($data['school_address'])&&!isset($data['school_tel'])&&!isset($data['pass_rate'])&&!isset($data['score'])){
            $this->layout->view('/manage/manage_ranking/create');
        }else{
            date_default_timezone_set('PRC');
            $data['create_date']=date('Y-m-d H:i:s');
            $data['create_id']=$id;
            $data['update_date']=date('Y-m-d H:i:s');
            $data['update_id']=$id;
            $this->ranking->insert($data);
            $this->admin();
        }

    }

    /**
     * 更新驾校管理信息
     * @param string $rankingID 驾校管理信息的ID
     */
    public function update($rankingID){
        if(!empty($_SESSION['id'])){
            $id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $where['id']=$rankingID;
        $data['school_name']=$this->input->post('school_name');
        $data['school_address']=$this->input->post('school_address');
        $data['school_tel']=$this->input->post('school_tel');
        $data['school_url']=$this->input->post('school_url');
        $data['pass_rate']=$this->input->post('pass_rate');
        $data['score']=$this->input->post('score');
        date_default_timezone_set('PRC');
        $data['update_date']=date('Y-m-d H:i:s');
        $data['update_id']=$id;

        if(!isset($data['school_name'])&&!isset($data['school_address'])&&!isset($data['school_tel'])&&!isset($data['pass_rate'])&&!isset($data['score'])){
            $result=$this->ranking->select($where);
            $list['result']=$result;
            $this->layout->view('/manage/manage_ranking/update',$list);
        }else{
            $this->ranking->update($data,$where);
            $this->view($rankingID,$id);
        }
    }

    /**
     * 查看指定的驾校管理信息
     * @param string $rankingID 驾校管理信息的ID
     */
    public function view($rankingID){
        if(empty($_SESSION['id'])){
            redirect('/manage_controller/Login');
        }
        $where['id']=$rankingID;
        $result=$this->ranking->select($where);
        $list['result']=$result;
        $this->layout->view('/manage/manage_ranking/view',$list);
    }

    /**
     * 删除指定的新闻信息
     * @param string $rankingID 驾校管理信息的ID
     */
    public function delete($rankingID){
        $where['id']=$rankingID;
        $this->ranking->delete($where);
        redirect('/manage_ranking/admin');
    }

    /**
     * 按驾校通过率进行排名显示
     */
    public function showRankingByPassRate(){
        $where['deleted']=0;
        $field='pass_rate';

        $result=$this->ranking->orderBy($field,$where);
        if($result){
            return $this->send_json(true,"",$result);
        }
        else{
            return $this->send_json(false,"读取驾校通过率排名信息失败");
        }
    }

    /**
     * 按驾校分数进行排名显示
     */
    public function showRankingByScore(){
        $where['deleted']=0;
        $field='score';

        $result=$this->ranking->orderBy($field,$where);
        if($result){
            return $this->send_json(true,"",$result);
        }
        else{
            return $this->send_json(false,"读取驾校分数排名信息失败");
        }
    }

}