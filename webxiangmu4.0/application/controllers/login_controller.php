<?php
	class Login_controller extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('layout');
			$this->load->helper('url');
		}
		//加载登录页面
		public function Login(){
			$this->load->model('login_model','login');
			$this->login->clearImfor();
			$this->load->helper('url');
			$this->load->view('login_view');
			
		} 
		
		//登录验证
		public function Check(){
			$this->load->helper('url');
			$this->load->model('Login_model','login');
			
			$id=$this->input->post('ID');
			$password=$this->input->post('PASSWORD');
			
			$res=$this->login->getById($id);
			if(!empty($res)){
				if(md5($password)==$res[0]->password){
					if($res[0]->type=="manager")
					{
						$this->load->model('manager_model','manager');
						$this->load->library('pagination');
						$this->load->helper('url');
						$this->login->saveName($res[0]->username);
						
						$pagesize=10;
						$total=$this->manager->getCount_nocheck();
						$config['base_url']=site_url('manager_controller/Nocheck');
						$config['total_rows']=$total[0]->cou;
						$config['per_page']=$pagesize;
						$config['next_link']='下一页';
						$config['prev_link']='上一页';
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
						$list=$this->manager->showNocheckMessage($offset,$pagesize);
						
						$data['link']=$this->pagination->create_links();
						$data['tittle']="未被审核的名单";
						$data['list']=$list;
						$data['href']=site_url('check_controller/checked');
						$data['act']="审核";

						$this->layout->view('manager_view_body',$data);
					}else{
						$this->load->model('manager_model','manager');
						$this->load->library('pagination');
						$this->load->helper('url');
						
						$pagesize=10;
						$total=$this->manager->getCount_nopass();
						$config['base_url']=site_url('manager_controller/Nopass');
						$config['total_rows']=$total[0]->cou;
						$config['per_page']=$pagesize;
						$config['next_link']='下一页';
						$config['prev_link']='上一页';
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
						$list=$this->manager->showNopassMessage($offset,$pagesize);
						
						$data['link']=$this->pagination->create_links();
						$data['tittle']="审核不合格的名单";
						$data['list']=$list;
						$data['href']=site_url('nopass_controller/nopass');
						$data['act']="查看详细信息";

						$this->layout->view('manager_view_body',$data);
					}
								
				}else{
					$data['errno']=1;
					$this->load->view('login_view',$data);		
				}
			}else{
				$data['errno']=2;
				$this->load->view('login_view',$data);
			}
		}
		
		
	} 
?>