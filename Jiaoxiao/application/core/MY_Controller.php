<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

/**
 * 这个是基类，封装一些公共的东西
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
     *  以 json 的形式输出结果
     * @param string $success
     * @param string $msg
     * @param array $data
     * @param int $code 错误码(需要用到成功失败处的其它码时需要定义)
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
     * 统一输出出错信息
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