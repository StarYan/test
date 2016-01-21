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

}
