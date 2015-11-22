<?php
	class Manager_controller extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('layout');
			$this->load->helper('url');
		}


		//审核合格的分页显示
		public function Pass(){
			$this->load->helper('url');
			$this->load->model('manager_model','manager');
			$this->load->library('pagination');
			
			$pagesize=10;
			$total=$this->manager->getCount_pass();
			$config['base_url']=site_url('manager_controller/Pass');
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
			$list=$this->manager->showPassMessage($offset,$pagesize);
			if(!empty($_POST['KEYWORD'])){
				$keywords=$_POST['KEYWORD'];
				$list=$this->manager->searchPassMessageByUsernum($offset,$pagesize,$keywords);
				if(empty($list)){
					$list=$this->manager->searchPassMessageByUsername($offset,$pagesize,$keywords);
				}
			}
			
			$data['link']=$this->pagination->create_links();
			$data['tittle']="审核合格的名单";
			$data['list']=$list;
			$data['href']=site_url('print_controller/printPage');
			$data['act']="打印";
			$this->layout->view('manager_view_body',$data);
		}


		//没有审核的分页显示
		public function Nocheck(){
			$this->load->model('manager_model','manager');
			$this->load->model('check_model','check');
			$this->load->library('pagination');
			$this->load->helper('url');
			
			
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
			if(!empty($_POST['KEYWORD'])){
				$keywords=$_POST['KEYWORD'];
				$list=$this->manager->searchNocheckMessageByUsernum($offset,$pagesize,$keywords);
				if(empty($list)){
					$list=$this->manager->searchNocheckMessageByUsername($offset,$pagesize,$keywords);
				}
			}
			
			$data['link']=$this->pagination->create_links();
			$data['tittle']="未被审核的名单";
			$data['list']=$list;
			$data['href']=site_url('check_controller/checked');
			$data['act']="审核";
			
			$this->check->deleteAll();

			$this->layout->view('manager_view_body',$data);
			
		}


		//审核不合格的分页显示
		public function Nopass(){
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
			if(!empty($_POST['KEYWORD'])){
				$keywords=$_POST['KEYWORD'];
				$list=$this->manager->searchNopassMessageByUsernum($offset,$pagesize,$keywords);
				if(empty($list)){
					$list=$this->manager->searchNopassMessageByUsername($offset,$pagesize,$keywords);
				}
			}
			
						
			$data['link']=$this->pagination->create_links();
			$data['tittle']="审核不合格的名单";
			$data['list']=$list;
			$data['href']=site_url('nopass_controller/Nopass');
			$data['act']="查看详细信息";

			$this->layout->view('manager_view_body',$data);
		}
		

		
	
	}
?>