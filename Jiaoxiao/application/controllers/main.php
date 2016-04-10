<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/10
 * Time: 11:20
 * 引导页
 */
class Main extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('user_model', 'user');
        $this->load->model('admin_model', 'admin');
        $this->load->model('checked_model', 'checked');
        $this->load->model('school_model','school');
        $this->load->model('coach_model','coach');
    }

    /**
     * 驾校管理系统相关入口
     */
    public function goInterface(){
        $this->load->view('/main/interface');
    }

    /**
     * 驾校管理系统主界面
     */
    public function goMain(){
        $this->load->view('/main/main');
    }


    /**
     * 主界面的驾校信息/教练信息搜索功能
     */
    public function search(){
        $searchInfo=$this->input->post('searchInfo',true);
        if($searchInfo){
            $schoolWhere['school_name']=$searchInfo;
            $coachWhere['c_name']=$searchInfo;
            $schoolCount=$this->school->count($schoolWhere);
            if($schoolCount){
                $schoolResult = $this->school->search($schoolWhere);
                $list['dataSchool']=$schoolResult;
                $list['link']="";
                $this->load->view('/schoolIntroduction/admin',$list);
            }else{
                $coachCount=$this->coach->count($coachWhere);
                if($coachCount){
                    $coachResult = $this->coach->get($coachWhere);
                    $list['dataCoach']=$coachResult;
                    $list['link']="";
                    $this->load->view('/schoolIntroduction/adminCoach',$list);
                }else{
                    redirect('/main/goInterface');
                }
            }
        }else{
            redirect('/main/goInterface');
        }
    }

}
