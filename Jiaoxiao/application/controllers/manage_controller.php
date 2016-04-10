<?php

/**
 * Class Manage_controller
 * 后台登录
 */

class Manage_controller extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('user_model','user');
        $this->load->model('admin_model','admin');
        $this->load->model('checked_model','checked');
        $this->load->library('session');
    }

    /**
     * 进入后台登录界面
     */
    public function Login(){
        if(!empty($_SESSION['id'])){
            unset($_SESSION['id']);
            unset($_SESSION['username']);
        }
        $this->load->view('/manage/login_view');
    }

    /**
     * 对后台登陆人员的权限验证,验证通过则跳转去后台管理界面,验证不通过则返回错误提示
     * @param string $username 后台登陆人员的用户名
     * @param string $password 后台登陆人员的用户密码
     */
    public function Access(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $dataAdmin=$this->admin->getAdminInfoByUsername($username);

        if(!empty($dataAdmin)){
            if($dataAdmin->password==$password){
                $_SESSION['id']=$dataAdmin->id;
                $_SESSION['username']=$dataAdmin->username;
                $pagesize=10;
                $count=$this->user->getUserCountByStatus(0);
                $config['base_url']=site_url('manage_controller/UnChecked/');
                $config['total_rows']=$count;
                $config['per_page']=$pagesize;
                $config['next_link']='下一页';
                $config['prev_link']='上一页';
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
                $dataUser=$this->user->getStudentInfoByStatus(0,$offset,$pagesize);

                $list['dataUser']=$dataUser;
                $list['dataAdmin']=$dataAdmin;
                $list['link']=$this->pagination->create_links();
                $list['href']=site_url('/manage_controller/Check/');
                $list['act']='<i class="icon-check"></i>&nbsp;&nbsp;审核';
                $list['UnChecked_class']='active';

                $this->layout->view('/manage/manage_view',$list);
            }else{
                $err['errno']=1;
                $this->load->view('/manage/login_view',$err);
            }
        }
        else{
            $err['errno']=2;
            $this->load->view('/manage/login_view',$err);
        }

    }

    /**
     *在后台界面显示未审核的用户
     * @param string $id 管理员的id
     */
    public function UnChecked(){
        if(!empty($_SESSION['id'])){
            $id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }

        $pagesize=10;
        $count=$this->user->getUserCountByStatus(0);
        $config['base_url']=site_url('manage_controller/UnChecked/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页';
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
        $dataUser=$this->user->getStudentInfoByStatus(0,$offset,$pagesize);
        $dataAdmin=$this->admin->getAdminInfoById($id);

        $list['dataUser']=$dataUser;
        $list['dataAdmin']=$dataAdmin;
        $list['link']=$this->pagination->create_links();
        $list['href']=site_url('/manage_controller/Check/');
        $list['act']='<i class="icon-check"></i>&nbsp;&nbsp;审核';
        $list['UnChecked_class']='active';

        $this->layout->view('/manage/manage_view',$list);


    }

    /**
     * 在后台页面显示审核合格的用户
     * @param string $id 管理员的id
     */
    public function Pass(){
        if(!empty($_SESSION['id'])){
            $id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $pagesize=10;
        $count=$this->user->getUserCountByStatus(1);
        $config['base_url']=site_url('manage_controller/Pass/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页';
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
        $dataUser=$this->user->getStudentInfoByStatus(1,$offset,$pagesize);
        $dataAdmin=$this->admin->getAdminInfoById($id);

        $list['dataUser']=$dataUser;
        $list['dataAdmin']=$dataAdmin;
        $list['link']=$this->pagination->create_links();
        $list['href']=site_url('/manage_controller/PrintInfo');
        $list['act']='<i class="icon-print"></i>&nbsp;&nbsp;打印';
        $list['Pass_class']='active';

        $this->layout->view('/manage/manage_view',$list);

    }

    /**
     *在后台显示审核不合格的用户
     * @param string $id 管理员的id
     */
    public function UnPassed(){
        if(!empty($_SESSION['id'])){
            $id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $pagesize=10;
        $count=$this->user->getUserCountByStatus(2);
        $config['base_url']=site_url('manage_controller/UnPass/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页';
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
        $dataUser=$this->user->getStudentInfoByStatus(2,$offset,$pagesize);
        $dataAdmin=$this->admin->getAdminInfoById($id);

        $list['dataUser']=$dataUser;
        $list['dataAdmin']=$dataAdmin;
        $list['link']=$this->pagination->create_links();
        $list['href']=site_url('/manage_controller/ViewWrongMsg/');
        $list['act']='<i class="icon-eye-open"></i>&nbsp;&nbsp;查看详情';
        $list['UnPassed_class']='active';

        $this->layout->view('/manage/manage_view',$list);
    }

    /**
     * 对已经报名的用户信息进行审核
     * @param string $user_id 用户的id
     */
    public function Check($user_id){
        if(!empty($_SESSION['id'])){
            $admin_id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $dataAdmin=$this->admin->getAdminInfoById($admin_id);
        $dataUser=$this->user->getUserInfoById($user_id);
        $list['dataAdmin']=$dataAdmin;
        $list['dataUser']=$dataUser;
        $list['UnChecked_class']='active';
        $this->layout->view('/manage/check_view',$list);
    }

    /**
     * 处理审核页面提交的审核结果
     * @param string $user_id 用户的id
     */
    public function Checked($user_id){
        if(!empty($_SESSION['id'])){
            $admin_id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $remark=$_POST['remark'];
        date_default_timezone_set('PRC');
        $create_date=date('Y-m-d H:i:s');
        if(empty($remark)){
            $remark=NULL;
            $this->checked->insertInfo($admin_id,$user_id,$remark,$create_date);
            $this->user->changeStatusById($user_id,1);
            redirect('/manage_controller/UnChecked/');
        }else{
            $this->checked->insertInfo($admin_id,$user_id,$remark,$create_date);
            $this->user->changeStatusById($user_id,2);
            redirect('/manage_controller/UnChecked/');
        }
    }

    /**
     * 打印审核合格的用户信息
     * @param string $id 用户的id
     */
    public function PrintInfo($id){
        $list=$this->user->getUserInfoById($id);
        $data['list']=$list;
        $this->load->view('/manage/print_view',$data);
    }

    /**
     * 显示审核不合格的用户的错误信息
     * @param string $user_id 用户的id
     */
    public function ViewWrongMsg($user_id){
        if(!empty($_SESSION['id'])){
            $admin_id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $dataChecked=$this->checked->getInfoByUserId($user_id);
        $dataUser=$this->user->getUserInfoById($dataChecked->user_id);
        $dataAdmin=$this->admin->getAdminInfoById($admin_id);
        $checkedAdmin=$this->admin->getAdminInfoById($dataChecked->admin_id);
        $data['dataUser']=$dataUser;
        $data['dataAdmin']=$dataAdmin;
        $data['dataChecked']=$dataChecked;
        $data['checkedAdmin']=$checkedAdmin;
        $data['UnPassed_class']='active';
        $this->layout->view('/manage/wrongmessage_view',$data);
    }

    /**
     * 删除已经通知的用户
     * @param string $user_id 用户的id
     */
    public function Deleted($user_id){
        if(!empty($_SESSION['id'])){
            $admin_id=$_SESSION['id'];
        }else{
            redirect('/manage_controller/Login');
        }
        $this->user->deletedByUserId($user_id,$admin_id);
        redirect('manage_controller/UnPassed/');
    }

}
