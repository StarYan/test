<?php
    class Manage_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('layout');
            $this->load->helper('url');
            $this->load->library('pagination');
            $this->load->model('user_model','user');
            $this->load->model('admin_model','admin');
            $this->load->model('checked_model','checked');
        }

        /**
         * �����̨��¼����
         */
        public function Login(){
            $this->load->view('/manage/login_view');
        }

        /**
         * �Ժ�̨��½��Ա��Ȩ����֤,��֤ͨ������תȥ��̨�������,��֤��ͨ���򷵻ش�����ʾ
         * @param string $username ��̨��½��Ա���û���
         * @param string $password ��̨��½��Ա���û�����
         */
        public function Access(){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $dataAdmin=$this->admin->getAdminInfoByUsername($username);
            $list['dataAdmin']=$dataAdmin;
            $pagesize=10;
            $count=$this->user->getUserCountByStatus(0);
            $config['base_url']=site_url('manage_controller/UnChecked/'.$dataAdmin->id);
            $config['total_rows']=$count;
            $config['per_page']=$pagesize;
            $config['next_link']='>>';
            $config['prev_link']='<<';
            $config['first_link']='��ҳ';
            $config['last_link']='βҳ';
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
            $dataUser=$this->user->getStudentInfoByStatus(0,$offset,$pagesize);

            $list['dataUser']=$dataUser;
            $list['dataAdmin']=$dataAdmin;
            $list['link']=$this->pagination->create_links();
            $list['href']=site_url('/manage_controller/Check/'.$dataAdmin->id);
            $list['act']='<i class="icon-check"></i>&nbsp;&nbsp;check';


            if(!empty($dataAdmin)){
                if($dataAdmin->password==$password){
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
         *�ں�̨������ʾδ��˵��û�
         * @param string $id ����Ա��id
         */
        public function UnChecked($id){
            $pagesize=10;
            $count=$this->user->getUserCountByStatus(0);
            $config['base_url']=site_url('manage_controller/UnChecked/'.$id);
            $config['total_rows']=$count;
            $config['per_page']=$pagesize;
            $config['next_link']='>>';
            $config['prev_link']='<<';
            $config['first_link']='��ҳ';
            $config['last_link']='βҳ';
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
            $dataUser=$this->user->getStudentInfoByStatus(0,$offset,$pagesize);
            $dataAdmin=$this->admin->getAdminInfoById($id);

            $list['dataUser']=$dataUser;
            $list['dataAdmin']=$dataAdmin;
            $list['link']=$this->pagination->create_links();
            $list['href']=site_url('/manage_controller/Check/'.$id);
            $list['act']='<i class="icon-check"></i>&nbsp;&nbsp;check';

            $this->layout->view('/manage/manage_view',$list);


        }

        /**
         * �ں�̨ҳ����ʾ��˺ϸ���û�
         * @param string $id ����Ա��id
         */
        public function Pass($id){
            $pagesize=10;
            $count=$this->user->getUserCountByStatus(1);
            $config['base_url']=site_url('manage_controller/UnChecked/'.$id);
            $config['total_rows']=$count;
            $config['per_page']=$pagesize;
            $config['next_link']='>>';
            $config['prev_link']='<<';
            $config['first_link']='��ҳ';
            $config['last_link']='βҳ';
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
            $dataUser=$this->user->getStudentInfoByStatus(1,$offset,$pagesize);
            $dataAdmin=$this->admin->getAdminInfoById($id);

            $list['dataUser']=$dataUser;
            $list['dataAdmin']=$dataAdmin;
            $list['link']=$this->pagination->create_links();
            $list['href']=site_url('/manage_controller/PrintInfo');
            $list['act']='<i class="icon-print"></i>&nbsp;&nbsp;print';

            $this->layout->view('/manage/manage_view',$list);

        }

        /**
         *�ں�̨��ʾ��˲��ϸ���û�
         * @param string $id ����Ա��id
         */
        public function UnPassed($id){
            $pagesize=10;
            $count=$this->user->getUserCountByStatus(2);
            $config['base_url']=site_url('manage_controller/UnChecked/'.$id);
            $config['total_rows']=$count;
            $config['per_page']=$pagesize;
            $config['next_link']='>>';
            $config['prev_link']='<<';
            $config['first_link']='��ҳ';
            $config['last_link']='βҳ';
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
            $dataUser=$this->user->getStudentInfoByStatus(2,$offset,$pagesize);
            $dataAdmin=$this->admin->getAdminInfoById($id);

            $list['dataUser']=$dataUser;
            $list['dataAdmin']=$dataAdmin;
            $list['link']=$this->pagination->create_links();
            $list['href']=site_url('/manage_controller/ViewWrongMsg/'.$id);
            $list['act']='<i class="icon-eye-open"></i>&nbsp;&nbsp;view';

            $this->layout->view('/manage/manage_view',$list);
        }

        /**
         * ���Ѿ��������û���Ϣ�������
         * @param string $admin_id ����Ա��id
         * @param string $user_id �û���id
         */
        public function Check($admin_id,$user_id){
            $dataAdmin=$this->admin->getAdminInfoById($admin_id);
            $dataUser=$this->user->getUserInfoById($user_id);
            $list['dataAdmin']=$dataAdmin;
            $list['dataUser']=$dataUser;
            $this->layout->view('/manage/check_view',$list);
        }

        /**
         * �������ҳ���ύ����˽��
         * @param string $admin_id ����Ա��id
         * @param string $user_id �û���id
         */
        public function Checked($admin_id,$user_id){
            $remark=$_POST['remark'];
            date_default_timezone_set('PRC');
            $create_date=date('y-m-d h:i:s',time());
            if(empty($remark)){
                $remark=NULL;
                $this->checked->insertInfo($admin_id,$user_id,$remark,$create_date);
                $this->user->changeStatusById($user_id,1);
                redirect('/manage_controller/UnChecked/'.$admin_id);
            }else{
                $this->checked->insertInfo($admin_id,$user_id,$remark,$create_date);
                $this->user->changeStatusById($user_id,2);
                redirect('/manage_controller/UnChecked/'.$admin_id);
            }
        }

        /**
         * ��ӡ��˺ϸ���û���Ϣ
         * @param string $id �û���id
         */
        public function PrintInfo($id){
            $list=$this->user->getUserInfoById($id);
            $data['list']=$list;
            $this->load->view('/manage/print_view',$data);
        }

        /**
         * ��ʾ��˲��ϸ���û��Ĵ�����Ϣ
         * @param string $admin_id ����Ա��id
         * @param string $user_id �û���id
         */
        public function ViewWrongMsg($admin_id,$user_id){
            $dataChecked=$this->checked->getInfoByUserId($user_id);
            $dataUser=$this->user->getUserInfoById($dataChecked->user_id);
            $dataAdmin=$this->admin->getAdminInfoById($admin_id);
            $checkedAdmin=$this->admin->getAdminInfoById($dataChecked->admin_id);
            $data['dataUser']=$dataUser;
            $data['dataAdmin']=$dataAdmin;
            $data['dataChecked']=$dataChecked;
            $data['checkedAdmin']=$checkedAdmin;
            $this->layout->view('/manage/wrongmessage_view',$data);
        }

    }
