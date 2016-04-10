<?php
class School extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('school_model','school');
        $this->load->model('user_model','user');
        $this->load->model('cartype_model','cartype');
        $this->load->model('coach_model','coach');
        $this->load->model('place_model','place');
        $this->load->model('schoolEvaluation_model','schoolEvaluation');
        $this->load->model('schoolRegister_model','schoolRegister');
        $this->load->library('pagination');
        date_default_timezone_set('PRC');
    }

    /**
     * 加载教练信息的页面
     */
    public function coachAdmin(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }

        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];
        $coachWhere['school_id']=$school_id;
        $coachWhere['deleted']=0;
        $pagesize=10;
        $count=$this->coach->count($coachWhere);
        $config['base_url']=site_url('school/coachAdmin/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->coach->get($coachWhere,$offset,$pagesize);
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['coach_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/coach/admin',$list);
    }

    /**
     * 退出的ajax接口
     */
    public function Logout(){
        $this->session->sess_destroy();
        $this->send_json(true,'成功退出');
    }

    /**
     * 添加教练信息
     */
    public function coachAdd(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }
        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];

        $config['upload_path']='./uploads/';
        $config['allowed_types']='png|jpg|jpeg';
        $config['max_size']='40000';
        $this->load->library('upload',$config);
        $this->upload->do_upload('img');
        $img=$this->upload->data();

        $data['school_name']=$this->session->userdata('schoolRegister')['school_name'];
        $data['img']=$img['file_name'];
        $data['school_id']=$school_id;
        $data['c_name']=$this->input->post('c_name',true);
        $data['qualification_certificate']=$this->input->post('qualification_certificate',true);
        $data['tel']=$this->input->post('tel',true);
        $data['price']=$this->input->post('price',true);
        $data['student_num']=$this->input->post('student_num',true);

        if($this->input->post('c_name',true)){
            $this->coach->add($data);
            redirect('/school/coachAdmin');
        }else{
            $list['coach_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/coach/create',$list);
        }



    }


    /**
     * 教练信息的模糊搜索
     */
    public function coachSearch(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }
        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];

        $where['school_id']=$school_id;
        $where['c_name']=$this->input->post('c_name',true);
        $where['qualification_certificate']=$this->input->post('qualification_certificate',true);
        $where['tel']=$this->input->post('tel',true);
        $where['price']=$this->input->post('price',true);
        $where['student_num']=$this->input->post('student_num',true);
        $where['star']=$this->input->post('star',true);

        $pagesize=10;
        $count=$this->coach->count($where);
        $config['base_url']=site_url('school/coachAdmin/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->coach->fuzzy_search($where,$offset,$pagesize);
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['coach_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/coach/admin',$list);
    }


    /**
     * 删除教练信息
     * @param $id
     */
    public function coachDelete($id){
        $where['id']=$id;
        $this->coach->delete($where);
        redirect('/school/coachAdmin');
    }

    /**
     * 更新教练信息
     * @param $id
     */
    public function coachUpdate($id){
        if(empty($this->session->userdata('schoolRegister'))){
            redirect('/manage_schoolRegister/goRegister');
        }
        $data['c_name']=$this->input->post('c_name',true);
        $data['qualification_certificate']=$this->input->post('qualification_certificate',true);
        $data['tel']=$this->input->post('tel',true);
        $data['price']=$this->input->post('price',true);
        $data['student_num']=$this->input->post('student_num',true);
        $data['star']=$this->input->post('star',true);

        $where['id']=$id;
        if(isset($data['c_name'])){
            $this->coach->update($data,$where);
            redirect('/school/coachAdmin');
        }else{
            $res=$this->coach->get($where);
            $list['result']=$res[0];
            $list['coach_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/coach/update',$list);
        }

    }

    /**
     * 查看教练信息
     * @param $id
     */
    public function coachView($id){
        if(empty($this->session->userdata('schoolRegister'))){
            redirect('/manage_schoolRegister/goRegister');
        }
        $where['id']=$id;
        $result=$this->coach->get($where);
        $list['result']=$result;
        $list['coach_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/coach/view',$list);
    }

    /***************************************************************/

    /**
     * 加载车辆信息的页面
     */
    public function carAdmin(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }

        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];
        $carWhere['school_id']=$school_id;
        $carWhere['deleted']=0;
        $pagesize=10;
        $count=$this->cartype->count($carWhere);
        $config['base_url']=site_url('school/carAdmin/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->cartype->get($carWhere,$offset,$pagesize);
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['car_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/car/admin',$list);
    }

    /**
     * 添加车辆信息
     */
    public function carAdd(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }
        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];

        $config['upload_path']='./uploads/';
        $config['allowed_types']='png|jpg|jpeg';
        $config['max_size']='40000';
        $this->load->library('upload',$config);
        $this->upload->do_upload('img');
        $img=$this->upload->data();

        $data['img']=$img['file_name'];
        $data['school_id']=$school_id;
        $data['number']=$this->input->post('number',true);
        $data['style']=$this->input->post('style',true);
        $data['brand']=$this->input->post('brand',true);
        $data['type']=$this->input->post('type',true);
        $data['age']=$this->input->post('age',true);

        if($this->input->post('number',true)){
            $this->cartype->add($data);
            redirect('/school/carAdmin');
        }else{
            $list['car_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/car/create',$list);
        }
    }


    /**
     * 教练信息的模糊搜索
     */
    public function carSearch(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }
        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];

        $where['school_id']=$school_id;
        $where['number']=$this->input->post('number',true);
        $where['style']=$this->input->post('style',true);
        $where['brand']=$this->input->post('brand',true);
        $where['type']=$this->input->post('type',true);
        $where['age']=$this->input->post('age',true);

        $pagesize=10;
        $count=$this->cartype->count($where);
        $config['base_url']=site_url('school/coachAdmin/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->cartype->fuzzy_search($where,$offset,$pagesize);
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['car_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/car/admin',$list);
    }


    /**
     * 删除车辆信息
     * @param $id
     */
    public function carDelete($id){
        $where['id']=$id;
        $this->cartype->delete($where);
        redirect('/school/carAdmin');
    }

    /**
     * 更新车辆信息
     * @param $id
     */
    public function carUpdate($id){
        if(empty($this->session->userdata('schoolRegister'))){
            redirect('/manage_schoolRegister/goRegister');
        }
        $data['number']=$this->input->post('number',true);
        $data['style']=$this->input->post('style',true);
        $data['brand']=$this->input->post('brand',true);
        $data['type']=$this->input->post('type',true);
        $data['age']=$this->input->post('age',true);

        $where['id']=$id;
        if(isset($data['number'])){
            $this->cartype->update($data,$where);
            redirect('/school/carAdmin');
        }else{
            $res=$this->cartype->get($where);
            $list['result']=$res[0];
            $list['car_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/car/update',$list);
        }
    }

    public function carView($id){
        if(empty($this->session->userdata('schoolRegister'))){
            redirect('/manage_schoolRegister/goRegister');
        }
        $where['id']=$id;
        $result=$this->cartype->get($where);
        $list['result']=$result;
        $list['car_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/car/view',$list);
    }

    /**********************************************************************/

    /***************************************************************/

    /**
     * 加载场地信息的页面
     */
    public function placeAdmin(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }

        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];
        $carWhere['school_id']=$school_id;
        $carWhere['deleted']=0;
        $pagesize=10;
        $count=$this->place->count($carWhere);
        $config['base_url']=site_url('school/carAdmin/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->place->get($carWhere,$offset,$pagesize);
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['place_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/place/admin',$list);
    }

    /**
     * 添加场地信息
     */
    public function placeAdd(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }
        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];

        $config['upload_path']='./uploads/';
        $config['allowed_types']='png|jpg|jpeg';
        $config['max_size']='40000';
        $this->load->library('upload',$config);
        $this->upload->do_upload('img');
        $img=$this->upload->data();

        $data['img']=$img['file_name'];
        $data['school_id']=$school_id;
        $data['p_name']=$this->input->post('p_name',true);
        $data['address']=$this->input->post('address',true);
        $data['description']=$this->input->post('description',true);

        if($this->input->post('p_name',true)){
            $this->place->add($data);
            redirect('/school/placeAdmin');
        }else{
            $list['place_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/place/create',$list);
        }
    }


    /**
     * 场地信息的模糊搜索
     */
    public function placeSearch(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }
        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];

        $where['school_id']=$school_id;
        $where['p_name']=$this->input->post('p_name',true);
        $where['address']=$this->input->post('address',true);

        $pagesize=10;
        $count=$this->place->count($where);
        $config['base_url']=site_url('school/coachAdmin/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->place->fuzzy_search($where,$offset,$pagesize);
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['place_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/place/admin',$list);
    }


    /**
     * 删除场地信息
     * @param $id
     */
    public function placeDelete($id){
        $where['id']=$id;
        $this->place->delete($where);
        redirect('/school/placeAdmin');
    }

    /**
     * 更新场地信息
     * @param $id
     */
    public function placeUpdate($id){
        if(empty($this->session->userdata('schoolRegister'))){
            redirect('/manage_schoolRegister/goRegister');
        }
        $data['p_name']=$this->input->post('p_name',true);
        $data['address']=$this->input->post('address',true);
        $data['description']=$this->input->post('description',true);
        $config['upload_path']='./uploads/';
        $config['allowed_types']='png|jpg|jpeg';
        $config['max_size']='40000';
        $this->load->library('upload',$config);
        $this->upload->do_upload('img');
        $img=$this->upload->data();
        $data['img']=$img['file_name'];

        $where['id']=$id;
        if(isset($data['p_name'])){
            $this->place->update($data,$where);
            redirect('/school/placeAdmin');
        }else{
            $res=$this->place->get($where);
            $list['result']=$res[0];
            $list['place_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/place/update',$list);
        }
    }

    /**
     * 查看场地信息
     * @param $id
     */
    public function placeView($id){
        if(empty($this->session->userdata('schoolRegister'))){
            redirect('/manage_schoolRegister/goRegister');
        }
        $where['id']=$id;
        $result=$this->place->get($where);
        $list['result']=$result;
        $list['place_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/place/view',$list);
    }

    /**********************************************************************/


    /**
     * 加载学员信息的页面
     */
    public function studentAdmin(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }

        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];
        $studentWhere['school_id']=$school_id;
        $studentWhere['deleted']=0;
        $studentWhere['status']=1;
        $pagesize=10;
        $count=$this->user->count($studentWhere);
        $config['base_url']=site_url('school/studentAdmin/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->user->get($studentWhere,$offset,$pagesize);
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['student_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/user/admin',$list);
    }

    /**
     * 学员信息的模糊搜索
     */
    public function studentSearch(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }
        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];

        $where['school_id']=$school_id;
        $where['deleted']=0;
        $where['status']=1;
        $where['name']=$this->input->post('name',true);
        $where['idcard']=$this->input->post('idcard',true);
        $where['sex']=$this->input->post('sex',true);
        $where['wanted_car_type']=$this->input->post('wanted_car_type',true);
        $where['schedule']=$this->input->post('schedule',true);

        $pagesize=10;
        $count=$this->user->count($where);
        $config['base_url']=site_url('school/coachAdmin/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->user->fuzzy_search($where,$offset,$pagesize);
        $list['result']=$result;
        $list['link']=$this->pagination->create_links();
        $list['student_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/user/admin',$list);
    }

    /**
     * 更新学员信息
     * @param $id
     */
    public function studentUpdate($id){
        if(empty($this->session->userdata('schoolRegister'))){
            redirect('/manage_schoolRegister/goRegister');
        }
        $data['schedule']=$this->input->post('schedule',true);
        $data['phone']=$this->input->post('phone',true);
        $data['wanted_car_type']=$this->input->post('wanted_car_type',true);

        $where['id']=$id;
        if(isset($data['schedule'])){
            $this->user->update($data,$where);
            redirect('/school/studentAdmin');
        }else{
            $res=$this->user->get($where);
            $list['result']=$res[0];
            $list['student_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/user/update',$list);
        }
    }

    /**
     * 删除学员信息
     * @param $id
     */
    public function studentDelete($id){
        $where['id']=$id;
        $this->user->delete($where);
        redirect('/school/studentAdmin');
    }

    /**
     * 查看学员信息
     * @param $id
     */
    public function studentView($id){
        if(empty($this->session->userdata('schoolRegister'))){
            redirect('/manage_schoolRegister/goRegister');
        }
        $where['id']=$id;
        $result=$this->user->get($where);
        $list['result']=$result[0];
        $list['student_class']='active';
        $this->layout->setLayout('/_layouts/flatySchool');
        $this->layout->view('/school/user/view',$list);
    }

    /****************************************************************/

    /**
     * 填写驾校简介
     */
    public function introductionAdmin(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $licence=$this->session->userdata('schoolRegister')['licence'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }
        $schoolWhere['licence']=$licence;
        $res=$this->school->search($schoolWhere);
        $school_id=$res[0]['id'];

        $where['id']=$school_id;
        $data['school_introduction']=$this->input->post('school_introduction',true);
        $data['school_address']=$this->input->post('school_address',true);
        $data['school_tel']=$this->input->post('school_tel',true);

        $config['upload_path']='./uploads/';
        $config['allowed_types']='png|jpg|jpeg';
        $config['max_size']='40000';
        $this->load->library('upload',$config);
        $this->upload->do_upload('school_img');
        $img=$this->upload->data();
        if($img['file_name']){
            $data['school_img']=$img['file_name'];
        }

        if(isset($data['school_introduction'])){
            $this->school->update($data,$where);
            $res=$this->school->search($where);
            $list['result']=$res[0];
            $list['introduction_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/introduction/admin',$list);
        }else{
            $res=$this->school->search($where);
            $list['result']=$res[0];
            $list['introduction_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/introduction/admin',$list);
        }
    }

    /***************************************************************/
    /**
     * 修改密码
     */
    public function keyAdmin(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $where['id']=$this->session->userdata('schoolRegister')['id'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }
        $data['password']=$this->input->post('new_password',true);
        if(isset($data['password'])){
            $this->schoolRegister->update($data,$where);
            redirect('/manage_schoolRegister/goRegister');
        }else{
            $list['key_class']='active';
            $this->layout->setLayout('/_layouts/flatySchool');
            $this->layout->view('/school/changePassword/admin',$list);
        }
    }

    /**
     * 检测密码是否正确的ajax接口
     */
    public function CheckPassword(){
        if(!empty($this->session->userdata('schoolRegister'))){
            $password=$this->session->userdata('schoolRegister')['password'];
        }else{
            redirect('/manage_schoolRegister/goRegister');
        }

        $pre_password=$this->input->post('pre_password',true);

        if($password==$pre_password){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
    }

    /***************************************************************/

    /**
     * 驾校简介
     */
    public function schoolIntroduction(){
        $pagesize=10;
        $count=$this->school->count();
        $config['base_url']=site_url('school/schoolIntroduction/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->school->search("",$offset,$pagesize);
        $list['dataSchool']=$result;
        $list['link']=$this->pagination->create_links();
        $this->load->view('/schoolIntroduction/admin',$list);
    }

    /**
     * 教练简介
     */
    public function coachIntroduction(){
        $pagesize=9;
        $where['deleted']=0;
        $count=$this->coach->count($where);
        $config['base_url']=site_url('school/coachIntroduction/');
        $config['total_rows']=$count;
        $config['per_page']=$pagesize;
        $config['next_link']='下一页';
        $config['prev_link']='上一页   ';
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
        $result = $this->coach->get($where,$offset,$pagesize);
        $list['dataCoach']=$result;
        $list['link']=$this->pagination->create_links();
        $this->load->view('/schoolIntroduction/adminCoach',$list);
    }

    /**
     * @param $school_id
     * 进入驾校详细信息页面
     */
    public function goSchool($school_id){
        $where['id']=$school_id;
        $where['deleted']=0;
        $result=$this->school->search($where);
        $whereIntroduction['school_id']=$school_id;
        $whereIntroduction['deleted']=0;
        $countCoach=$this->coach->count($whereIntroduction);
        $countCar=$this->cartype->count($whereIntroduction);
        $countPlace=$this->place->count($whereIntroduction);
        $countEvaluation=$this->schoolEvaluation->count($whereIntroduction);
        $list['result']=$result;
        $list['countCoach']=$countCoach;
        $list['countCar']=$countCar;
        $list['countPlace']=$countPlace;
        $list['countEvaluation']=$countEvaluation;
        $this->load->view('/schoolIntroduction/schoolInformation',$list);
    }

    /**
     * 异步获取教练信息的接口
     */
    public function fetchPagesByCoach(){
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
        $where['school_id']=$this->input->post('id',true);
        $orderBy='star';
        $results=$this->coach->get($where,$position,$item_per_page,$orderBy);

        if($results){
            //output results from database
            foreach($results as $coach){
                echo '<div class="col-md-6 padding-bottom-20">';
                echo '<div class="funny-boxes bg-color-white">';
                echo '<div class="row">';
                echo '<div class="col-md-4 funny-boxes-img">';
                echo '<img class="img-responsive" style="height:100px;" src="'.base_url().'/uploads/'.$coach->img.'" alt="">';
                echo '<ul class="list-unstyled funny-boxes-rating">';
                echo '<li><i class="fa fa-star"></i></li>';
                echo '<li><i class="fa fa-star"></i></li>';
                echo '<li><i class="fa fa-star-o"></i></li>';
                echo '<li><i class="fa fa-star-o"></i></li>';
                echo '<li><i class="fa fa-star-o"></i></li>';
                echo '</ul>';
                echo '</div>';
                echo '<div class="col-md-8 funny-boxes-img">';
                echo '<h2><a href="#">'.$coach->c_name.'</a></h2>';
                echo '<ul class="list-unstyled">';
                echo '<li><i class="fa-fw fa fa-tag"></i> 资格证号码：'.$coach->qualification_certificate.'</li>';
                echo '<li><i class="fa-fw fa fa-home"></i> 所属驾校：'.$coach->school_name.'</li>';
                echo '<li><i class="fa-fw fa fa-jpy"></i> 陪练价格：'.$coach->price.'元/小时</li>';
                echo '<li><i class="fa-fw fa fa-group"></i> 学生数量：'.$coach->student_num.'人</li>';
                echo '<li><i class="fa-fw fa fa-phone"></i> 联系方式：'.$coach->tel.'</li>';
                echo '</ul></div></div></div></div>';
            }
        }else{
            echo false;
        }
    }

    /**
     * 异步获取车辆信息的接口
     */
    public function fetchPagesByCar(){
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
        $where['school_id']=$this->input->post('id',true);
        $orderBy='id';
        $results=$this->cartype->get($where,$position,$item_per_page,$orderBy);

        if($results){
            //output results from database
            foreach($results as $car){
                echo '<div class="col-md-6 padding-bottom-20">';
                echo '<div class="funny-boxes bg-color-white">';
                echo '<div class="row">';
                echo '<div class="col-md-4 funny-boxes-img">';
                echo '<img class="img-responsive" src="'.base_url().'/uploads/'.$car->img.'" alt="">';
                echo '</div>';
                echo '<div class="col-md-8 funny-boxes-img">';
                echo '<ul class="list-unstyled">';
                echo '<li><i class="fa-fw fa fa-tag"></i> 车牌号码：'.$car->number.'</li>';
                echo '<li><i class="fa-fw fa fa-tag"></i> 驾照：'.$car->style.'</li>';
                echo '<li><i class="fa-fw fa fa-tag"></i> 品牌：'.$car->brand.'</li>';
                echo '<li><i class="fa-fw fa fa-tag"></i> 类型：'.$car->type.'</li>';
                echo '<li><i class="fa-fw fa fa-tag"></i> 车龄：'.$car->age.'</li>';
                echo '</ul></div></div></div></div>';
            }
        }else{
            echo false;
        }
    }

    /**
     * 异步获取场地信息的接口
     */
    public function fetchPagesByPlace(){
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
        $where['school_id']=$this->input->post('id',true);
        $orderBy='id';
        $results=$this->place->get($where,$position,$item_per_page,$orderBy);

        if($results){
            //output results from database
            foreach($results as $place){
                echo '<div class="col-md-6 padding-bottom-20">';
                echo '<div class="funny-boxes bg-color-white">';
                echo '<div class="row">';
                echo '<div class="col-md-4 funny-boxes-img">';
                echo '<img class="img-responsive" style="height:100px;" src="'.base_url().'/uploads/'.$place->img.'" alt="">';
                echo '</div>';
                echo '<div class="col-md-8 funny-boxes-img">';
                echo '<h2><a href="#">'.$place->p_name.'</a></h2>';
                echo '<ul class="list-unstyled">';
                echo '<li><i class="fa-fw fa fa-map-marker"></i> 地址：</li>';
                echo '<li>'.$place->address.'</li>';
                echo '</ul></div></div></div></div>';
            }
        }else{
            echo false;
        }
    }

    /**
     * 异步获取评论信息的接口
     */
    public function fetchPagesByEvaluation(){
        $item_per_page = 1;
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
        $where['school_id']=$this->input->post('id',true);
        $orderBy='id';
        $results=$this->schoolEvaluation->get($where,$position,$item_per_page,$orderBy);

        if($results){
            //output results from database
            foreach($results as $schoolEvaluation){
                $userInfo=$this->user->getUserInfoById($schoolEvaluation->user_id);
                $nickname=$userInfo->nickname;
                echo '<div class="profile-body">';
                echo '<div class="panel panel-profile">';
                echo '<div class="panel-body">';
                echo '<div class="media media-v2">';
                echo '<a class="pull-left" href="#">';
                echo '<img class="media-object rounded-x" src="'.base_url().'/uploads/teacher-male.png" alt="">';
                echo '</a>';
                echo '<div class="media-body">';
                echo '<h4 class="media-heading">';
                echo '<strong><a href="#">'.$nickname.'</a></strong>';
                echo '<small>'.$schoolEvaluation->create_date.'</small>';
                echo '</h4>';
                echo '<p>'.$schoolEvaluation->remark.'</p>';
                echo '</div></div></div></div></div>';
            }
        }else{
            echo false;
        }
    }

    /**
     * 搜索驾校的ajax接口
     */
    public function schoolSearch(){
        $where['school_name']=$this->input->post('school',true);
        $result=$this->school->fuzzy_search($where);
        if($result){
            return $this->send_json(true,"",$result);
        }else{
            return $this->send_json(false,"");
        }
    }

    /**
     * 搜索教练信息的ajax接口
     */
    public function coachInfoSearch(){
        $where['c_name']=$this->input->post('coach',true);
        $result=$this->coach->fuzzy_search($where);
        if($result){
            return $this->send_json(true,"",$result);
        }else{
            return $this->send_json(false,"");
        }
    }

}