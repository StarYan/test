<?php
class School extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('school_model','school');
        $this->load->model('user_model','user');
        $this->load->model('cartype_model','cartype');
        $this->load->model('coach_model','coach');
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
        $this->load->view('/school/coach/admin',$list);
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

        $this->coach->add($data);
        redirect('/school/coachAdmin');
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
        $this->load->view('/school/coach/admin',$list);
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
            $this->load->view('/school/coach/update',$list);
        }

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
        $this->load->view('/school/car/admin',$list);
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

        $this->cartype->add($data);
        redirect('/school/carAdmin');
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
        $this->load->view('/school/car/admin',$list);
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
            $this->load->view('/school/car/update',$list);
        }
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
        $this->load->view('/school/user/admin',$list);
    }

    /**
     * 教练信息的模糊搜索
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
        $this->load->view('/school/user/admin',$list);
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
            $this->load->view('/school/user/update',$list);
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
        $data['school_img']=$img['file_name'];

        if(isset($data['school_introduction'])){
            $this->school->update($data,$where);
            $list['message']='编辑成功';
            $this->load->view('school/introduction/admin',$list);
        }else{
            $this->load->view('school/introduction/admin');
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
            $this->load->view('school/changePassword/admin');
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
}