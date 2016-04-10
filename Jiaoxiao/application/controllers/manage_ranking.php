<?php
class Manage_ranking extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('ranking_model','ranking');
        $this->load->model('admin_model','admin');
        $this->load->model('coach_model','coach');
        $this->load->model('school_model','school');
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

    /**
     * 加载排名信息页面
     */
    public function goRanking(){
        $where['deleted']=0;
        $count=$this->coach->count($where);
        $item_per_page = 3;
        $total_pages=$count/$item_per_page;

        $count1=$this->school->count($where);
        $school_per_page = 2;
        $total_pages1=$count1/$school_per_page;

        $count2=$this->school->count($where);
        $total_pages2=$count2/$school_per_page;

        $list['total_pages']=$total_pages;
        $list['total_pages1']=$total_pages1;
        $list['total_pages2']=$total_pages2;
        $this->load->view('/ranking/ranking_view',$list);
    }

    /**
     * 异步获取教练信息的接口
     */
    public function fetchPagesByCoach(){
        $item_per_page = 3;
        //sanitize post value
        $page_number = filter_var($this->input->post('page',true), FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

        //throw HTTP error if page number is not valid
        if(!is_numeric($page_number)){
            header('HTTP/1.1 500 Invalid page number!');
            exit();
        }

        //get current starting point of records
        $position = ($page_number * $item_per_page);

        //Limit our results within a specified range.
        $where['deleted']=0;
        $orderBy='star';
        $results=$this->coach->get($where,$position,$item_per_page,$orderBy);

        //output results from database
        if($results){
            foreach($results as $coach){
                echo '<div class="col-sm-4 padding-bottom-20">';
                echo '<div class="profile-blog">';
                echo '<img class="rounded-x" src="'.base_url().'/uploads/'.$coach->img.'" alt="">';
                echo '<div class="name-location">';
                echo '<strong>'.$coach->c_name.'</strong>';
                echo '<span><i class="fa fa-home"></i><a href="#">'.$coach->school_name.'</a></span><br/>';
                echo '<span><i class="fa fa-tag"></i>资格证号：'.$coach->qualification_certificate.'</span>';
                echo '</div>';
                echo '<div class="clearfix margin-bottom-20"></div>';
                echo '<hr>';
                echo '<ul class="list-inline share-list">';
                echo '<li><i class="fa fa-jpy"></i><a href="#">'.$coach->price.'/小时</a></li>';
                echo '<li><i class="fa fa-group"></i><a href="#">'.$coach->student_num.'名</a></li>';
                echo '<li><i class="fa fa-phone"></i><a href="#">'.$coach->tel.'</a></li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
            }
        }else{
            return false;
        }
    }

    /**
     * 异步获取驾校通过率信息的接口
     */
    public function fetchPagesByPassRate(){
        $item_per_page = 2;
        //sanitize post value
        $page_number = filter_var($this->input->post('page',true), FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

        //throw HTTP error if page number is not valid
        if(!is_numeric($page_number)){
            header('HTTP/1.1 500 Invalid page number!');
            exit();
        }

        //get current starting point of records
        $position = ($page_number * $item_per_page);

        //Limit our results within a specified range.
        $where['deleted']=0;
        $orderBy='pass_rate';
        $results=$this->school->get($where,$position,$item_per_page,$orderBy);

        //output results from database
        if($results){
            foreach($results as $school){
                echo '<div class="col-md-6 padding-bottom-20">';
                echo '<div class="funny-boxes funny-boxes-colored funny-boxes-blue" style="height:300px;overflow: hidden">';
                echo ' <div class="row">';
                echo '<div class="col-md-4 funny-boxes-img">';
                echo '<img class="img-responsive" src="'.base_url().'/uploads/'.$school->school_img.'" alt="">';
                echo '<ul class="list-unstyled">';
                echo '<li><i class="fa-fw fa fa-phone"></i> 联系方式：<br/>'.$school->school_tel.'</li>';
                echo '<li><i class="fa-fw fa fa-map-marker"></i>驾校地址：<br/>'.$school->school_address.'</li>';
                echo '</ul>';
                echo '</div>';
                echo '<div class="col-md-8 funny-boxes-img">';
                echo '<h2><a href="feature_funny_boxes.html#">'.$school->school_name.'</a></h2>';
                echo '<ul class="list-unstyled">';
                echo '<li><i class="fa-fw fa fa-tag"></i> 经营许可证：'.$school->licence.'</li>';
                echo '<li><i class="fa-fw fa fa-tags"></i> 通过率：'.$school->pass_rate.'%</li>';
                echo '<li><i class="fa-fw fa fa-tags"></i> 分数：'.$school->score.'分</li>';
                echo '</ul>';
                echo '<p class="introduction">'.$school->school_introduction.'</p>';
                echo '<a rel="hover-shadow" class="btn-u btn-u-yellow hover-shadow" href="'.site_url('/manage_ranking/goRegister').'/'.$school->licence.'">报名</a>&nbsp;';
                echo '<a rel="hover-shadow" class="btn-u btn-u-yellow hover-shadow" href="'.site_url('/school/goSchool').'/'.$school->id.'">查看详细信息 >></a>';
                echo '</div></div></div></div>';
            }
        }else{
            return false;
        }
    }

    /**
     * 异步获取驾校打分信息的接口
     */
    public function fetchPagesByScore(){
        $item_per_page = 2;
        //sanitize post value
        $page_number = filter_var($this->input->post('page',true), FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

        //throw HTTP error if page number is not valid
        if(!is_numeric($page_number)){
            header('HTTP/1.1 500 Invalid page number!');
            exit();
        }

        //get current starting point of records
        $position = ($page_number * $item_per_page);

        //Limit our results within a specified range.
        $where['deleted']=0;
        $orderBy='score';
        $results=$this->school->get($where,$position,$item_per_page,$orderBy);

        //output results from database
        if($results){
            foreach($results as $school){
                echo '<div class="col-md-6 padding-bottom-20">';
                echo '<div class="funny-boxes funny-boxes-colored funny-boxes-blue" style="height:300px;overflow: hidden">';
                echo ' <div class="row">';
                echo '<div class="col-md-4 funny-boxes-img">';
                echo '<img class="img-responsive" src="'.base_url().'/uploads/'.$school->school_img.'" alt="">';
                echo '<ul class="list-unstyled">';
                echo '<li><i class="fa-fw fa fa-phone"></i> 联系方式：<br/>'.$school->school_tel.'</li>';
                echo '<li><i class="fa-fw fa fa-map-marker"></i>驾校地址：<br/>'.$school->school_address.'</li>';
                echo '</ul>';
                echo '</div>';
                echo '<div class="col-md-8 funny-boxes-img">';
                echo '<h2><a href="feature_funny_boxes.html#">'.$school->school_name.'</a></h2>';
                echo '<ul class="list-unstyled">';
                echo '<li><i class="fa-fw fa fa-tag"></i> 经营许可证：'.$school->licence.'</li>';
                echo '<li><i class="fa-fw fa fa-tags"></i> 通过率：'.$school->pass_rate.'%</li>';
                echo '<li><i class="fa-fw fa fa-tags"></i> 分数：'.$school->score.'分</li>';
                echo '</ul>';
                echo '<p class="introduction">'.$school->school_introduction.'</p>';
                echo '<a rel="hover-shadow" class="btn-u btn-u-yellow hover-shadow" href="'.site_url('/manage_ranking/goRegister').'/'.$school->licence.'">报名</a>&nbsp;';
                echo '<a rel="hover-shadow" class="btn-u btn-u-yellow hover-shadow" href="'.site_url('/school/goSchool').'/'.$school->id.'">查看详细信息 >></a>';
                echo '</div></div></div></div>';
            }
        }else{
            return false;
        }
    }

    public function goRegister($licence){
        $list['licence']=$licence;
        $schoolInfo=$this->school->search($list);
        $school_name=$schoolInfo[0]['school_name'];
        $list['school_name']=$school_name;
        $this->load->view('/register/register_view',$list);
    }

}