<?php
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/12/10
 * Time: 11:20
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

    public function goInterface(){
        $this->load->view('/main/interface');
    }

    public function goMain(){
        $this->load->view('/main/main');
    }

}
