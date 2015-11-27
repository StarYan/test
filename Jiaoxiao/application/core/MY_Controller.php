<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

/**
 * ����ǻ��࣬��װһЩ�����Ķ���
 *
 */
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct ();
        // Load cache driver
        $this->load->driver('cache', array('adapter' => 'redis'));

        // Load Database
        $this->load->database();

    }

    protected  function check_login() {
        if ($this->user_id < 1) {
            return false;
        }
        return true;
    }

    /**
     *  �� json ����ʽ������
     * @param string $success
     * @param string $msg
     * @param array $data
     * @param int $code ������(��Ҫ�õ��ɹ�ʧ�ܴ���������ʱ��Ҫ����)
     */
    protected function send_json($success = true, $msg = '', $data = array(), $code = 1) {
        $code = $success === true ? CODE_SUCCESS : $code;
        $json_arr = array(
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        );

        $this->output->set_content_type('application/json')->set_output(json_encode($json_arr));
    }

    /**
     * ͳһ���������Ϣ
     * @param string $msg
     * @param boolean $ajax
     */
    protected function error($msg, $ajax = false, $title = '') {
        if ($ajax) {
            $this->send_json(false, $msg);
        } else {
            $this->load->view('error', array('error' => $msg, 'title' => $title));
        }
    }


}