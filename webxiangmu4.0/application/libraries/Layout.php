<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/21
 * Time: 13:36
 */
class Layout
{

    var $obj;
    var $layout;


    function Layout($layout = "flaty")
    {
        $this->obj =& get_instance();
        $this->layout = '_layouts/' . $layout;
    }

    function setLayout($layout)
    {
        $this->layout = $layout;
    }

    function view($view, $data=null, $return=false)
    {
        $data['content_for_layout'] = $this->obj->load->view($view,$data,true);

        if($return)
        {
            $output = $this->obj->load->view($this->layout,$data, true);
            return $output;
        }
        else
        {
            $this->obj->load->view($this->layout,$data, false);
        }
    }
}
?>