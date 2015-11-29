<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

/**
 * 这个是基类，封装一些公共的东西
 *
 */
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct ();

        // Load Database
        $this->load->database();

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

        $this->output->set_header('Content-Type: application/json; charset=utf-8')->set_output(json_encode($json_arr));
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

    /**
     * 对象转换为数组
     * @param $arrObjData
     * @param array $arrSkipIndices
     * @return array
     */
    function wl_objects_into_array($arrObjData, $arrSkipIndices = array())
    {
        $arrData = array();

        // if input is object, convert into array
        if (is_object($arrObjData)) {
            $arrObjData = get_object_vars($arrObjData);
        }

        if (is_array($arrObjData)) {
            foreach ($arrObjData as $index => $value) {
                if (is_object($value) || is_array($value)) {
                    $value = wl_objects_into_array($value, $arrSkipIndices); // recursive call
                }
                if (in_array($index, $arrSkipIndices)) {
                    continue;
                }
                $arrData[$index] = $value;
            }
        }
        return $arrData;
    }

}