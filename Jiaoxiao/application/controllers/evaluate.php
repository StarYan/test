<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/10
 * Time: 15:41
 * 用户评价
 */

class Evaluate extends MY_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->library('pagination');
        $this->load->model('user_model','user');
        $this->load->model('coach_model','coach');
        $this->load->model('evaluate_model','evaluate');
    }

    /**
     * 进入预约登录页面
     */
    public function index($flag=""){
        if($this->checklogin()){
            $this->session->sess_destroy();
        }
        if(empty($flag)){
            $this->load->view('/evaluate/evaluateLogin_view');
        }else{
            $data['flag']=$flag;
            $this->load->view('/evaluate/evaluateLogin_view',$data);
        }

    }


    /**
     * 加载学员评价页面
     */
    public function goEvaluate(){
        if($this->checklogin()){
            $pagesize=5;
            $count=$this->coach->count();
            $config['base_url']=site_url('evaluate/goEvaluate/');
            $config['total_rows']=$count;
            $config['per_page']=$pagesize;
            $config['next_link']='»';
            $config['prev_link']='«';
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
            $dataCoach=$this->coach->select(array(),$offset,$pagesize);
            $list['dataCoach']=$dataCoach;
            $list['link']=$this->pagination->create_links();
            $this->load->view('/evaluate/evaluate_view',$list);
        }else{
            redirect('evaluate/index');
        }


    }

    /**
     * 用户登录
     */
    public function login(){
        $nickname = $this->input->post('nickname',true);
        $password = $this->input->post('password',true);
        if($nickname&&$password){
            $data['nickname'] = $nickname;
            $data['password'] = $password;
            $result = $this->user->get_by_name_and_pwd($data);
            if($result){
                $_SESSION = $result;
                redirect('/evaluate/goEvaluate');
            }else{
                redirect(array('/evaluate/index','flag'=>1));
            }
        }
    }

    /**
     * 用户注销
     */
    public function logout(){
        $this->session->sess_destroy();
        return $this->send_json(true,"注销成功");
    }

    /**
     * ajax获取教练信息接口
     */
    public function getCoachInfo(){
        $where['id']=$this->input->post('coachID',true);
        $result=$this->coach->select($where);
        if($result){
            return $this->send_json(true,'',$result);
        }else{
            return $this->send_json(false,'获取教练信息失败');
        }
    }


    /**
     * ajax接口接受用户评价信息并保存到表'evaluate'
     */
    public function acceptEvaluate(){
        $data['user_id']=$this->input->post('userID',true);
        $data['coach_id']=$this->input->post('coachID',true);
        $data['star']=$this->input->post('star',true);
        $data['remark']=$this->input->post('remark',true);

        if($data['star']){
            date_default_timezone_set('PRC');
            $data['create_date']=date('Y-m-d H:i:s');

            $where['user_id']=$data['user_id'];
            $where['coach_id']=$data['coach_id'];

            $query=$this->evaluate->select($where);
            if(!$query){
                $result=$this->evaluate->insert($data);

                //获得教练的平均星级并更新到教练表
                $whereCoach['coach_id']=$data['coach_id'];
                $coachCount=$this->evaluate->count($whereCoach);//该教练被评价的次数
                $coachStar=$this->evaluate->starSum($whereCoach);//该教练获得的星星
                $star=$coachStar->star/($coachCount*5)*5;
                $dataCoach['star']=round($star);//四舍五入取整
                $list['id']=$data['coach_id'];
                $this->coach->update($dataCoach,$list);
                if($result){
                    return $this->send_json(true,"评价成功");
                }
            }else{
                return $this->send_json(false,"不能重复评价该教练");
            }
        }else{
            return $this->send_json(false,"请对教练进行评价再提交");
        }
    }
}