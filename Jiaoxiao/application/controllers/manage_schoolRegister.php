<?php
class Manage_schoolRegister extends MY_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('schoolRegister_model','schoolRegister');
        $this->load->model('admin_model','admin');
        $this->load->model('school_model','school');
        $this->load->library('pagination');
        $this->load->library('session');
        date_default_timezone_set('PRC');
    }

    public function admin(){
        if(!empty($_SESSION['id'])){
            $id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $dataAdmin=$this->admin->getAdminInfoById($id);//获取登录管理员ID
        $list['dataAdmin']=$dataAdmin;

        $pagesize=10;
        $count=$this->schoolRegister->count();
        $config['base_url']=site_url('manage_schoolRegister/admin/');
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
        $result = $this->schoolRegister->search('',$pagesize,$offset);

        $list['result']=$result;
        $list['dataAdmin']=$dataAdmin;
        $list['link']=$this->pagination->create_links();
        $list['SchoolRegister_class']='active';
        $this->layout->view('/manage/manage_schoolRegister/admin',$list);
    }

    /**
     * 更改指定的新闻信息
     * @param string $RegisterID 注册信息的ID
     */
    public function update($RegisterID){
        if(!empty($_SESSION['id'])){
            $adminID=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $where['id']=$RegisterID;
        $data['nickname']=$this->input->post('nickname',true);
        $data['school_name']=$this->input->post('school_name',true);
        $data['name']=$this->input->post('name',true);
        $data['tel']=$this->input->post('tel',true);
        $data['licence']=$this->input->post('licence',true);
        $data['status']=$this->input->post('status',true);
        $data['remark']=$this->input->post('remark',true);

        if(!isset($data['nickname'])){
            $result=$this->schoolRegister->search($where);
            $dataAdmin=$this->admin->getAdminInfoById($adminID);//获取登录管理员ID
            $list['dataAdmin']=$dataAdmin;
            $list['result']=$result;
            $this->layout->view('/manage/manage_schoolRegister/update',$list);
        }else{
            $data['update_date']=date('Y-m-d H:i:s');
            $data['update_id']=$adminID;
            $this->schoolRegister->update($data,$where);
            redirect('manage_schoolRegister/admin');
        }
    }

    /**
     * 删除指定的新闻信息
     * @param string $RegisterID 注册信息的ID
     */
    public function delete($RegisterID){
        $where['id']=$RegisterID;
        $this->schoolRegister->delete($where);
        redirect('/manage_schoolRegister/admin');
    }


    /**
     * 模糊搜索
     */
    public function search(){
        $where['nickname']=$this->input->post('nickname',true);
        $where['school_name']=$this->input->post('school_name',true);
        $where['name']=$this->input->post('name',true);
        $where['tel']=$this->input->post('tel',true);
        $where['licence']=$this->input->post('licence',true);
        $where['status']=$this->input->post('status',true);
        $where['update_id']=$this->input->post('update_id',true);

        if(!empty($_SESSION['id'])){
            $id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $dataAdmin=$this->admin->getAdminInfoById($id);//获取登录管理员ID
        $list['dataAdmin']=$dataAdmin;

        $pagesize=10;
        $count=$this->schoolRegister->count($where);
        $config['base_url']=site_url('manage_schoolRegister/admin/');
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
        $result = $this->schoolRegister->fuzzy_search($where,$pagesize,$offset);

        $list['result']=$result;
        $list['dataAdmin']=$dataAdmin;
        $list['link']=$this->pagination->create_links();
        $list['SchoolRegister_class']='active';
        $this->layout->view('/manage/manage_schoolRegister/admin',$list);
    }


    /**
     * 进入驾校注册页面
     */
    public function goRegister(){
        $this->load->view('/schoolRegister/schoolRegister_view');
    }

    /**
     * 接收驾校注册信息
     */
    public function acceptRegister(){
        $config['upload_path']='./uploads/';
        $config['allowed_types']='png|jpg|jpeg';
        $config['max_size']='40000';
        $this->load->library('upload',$config);
        $this->upload->do_upload('img');
        $img=$this->upload->data();

        $data['img']=$img['file_name'];
        $data['nickname']=$this->input->post('nickname',true);
        $data['school_name']=$this->input->post('school_name',true);
        $data['name']=$this->input->post('name',true);
        $data['tel']=$this->input->post('tel',true);
        $data['licence']=$this->input->post('licence',true);
        $data['password']=$this->input->post('password',true);
        $data['create_date']=date('Y-m-d H:i:s');
       if($this->schoolRegister->insert($data)){
           $list['flag']=1;
           $this->load->view('/schoolRegister/schoolRegister_view',$list);
       }
    }


    /**
     * 驾校信息管理平台的登录的ajax接口
     */
    public function Login(){
        $nickname=$this->input->post('nickname',true);
        $password=$this->input->post('password',true);

        $schoolRegister=$this->session->userdata('schoolRegister');
        if(!empty($schoolRegister)){
            $this->session->sess_destroy();
        }

        if($nickname&&$password){
            $where['nickname']=$nickname;
            if($this->schoolRegister->search($where)){
                $result=$this->schoolRegister->search($where);
                if($result[0]['password']==$password){
                    if($result[0]['status']==1){
                        $schoolWhere['licence']=$result[0]['licence'];
                        if(!$this->school->search($schoolWhere)){
                            $data['licence']=$result[0]['licence'];
                            $data['school_name']=$result[0]['school_name'];
                            $this->school->insert($data);
                        }
                        $this->session->set_userdata('schoolRegister',$result[0]);
                        $this->send_json(true,'');
                    }elseif($result[0]['status']==0){
                        $this->send_json(false,'您的资料正在审核中.....');
                    }elseif($result[0]['status']==2){
                        $this->send_json(false,'您的资料审核不通过，请等待客服与您联系');
                    }
                }else{
                    $this->send_json(false,'请确认您的账号密码是否正确');
                }
            }else{
                $this->send_json(false,'请确认您的账号密码是否正确');
            }
        }

    }

    /**
     * 检测是否已经存在的ajax接口
     */
    public function Check(){
        if($this->input->post('nickname',true)){
            $where['nickname']=$this->input->post('nickname',true);
            $num=$this->schoolRegister->count($where);
        }elseif($this->input->post('school_name',true)){
            $where['school_name']=$this->input->post('school_name',true);
            $num=$this->schoolRegister->count($where);
        }elseif($this->input->post('tel',true)){
            $where['tel']=$this->input->post('tel',true);
            $num=$this->schoolRegister->count($where);
        }elseif($this->input->post('licence',true)){
            $where['licence']=$this->input->post('licence',true);
            $num=$this->schoolRegister->count($where);
        }elseif($this->input->post('name',true)){
            $where['name']=$this->input->post('name',true);
            $num=$this->schoolRegister->count($where);
        }


        if($num){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
}