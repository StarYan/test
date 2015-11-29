<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

/**
 * ����ǻ��࣬��װһЩ�����Ķ���
 *
 */
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct ();

        // Load Database
        $this->load->database();

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

        $this->output->set_header('Content-Type: application/json; charset=utf-8')->set_output(json_encode($json_arr));
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

    /**
     * ����ת��Ϊ����
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