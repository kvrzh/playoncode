<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 29.09.2016
 * Time: 22:32
 */
class MY_Controller extends CI_Controller
{
    /**
     * @param $page
     * @param null $data
     */
    function _view($page, $data = null)
    {
        if (!isset($this->session->log_in)) {
            $this->session->set_userdata(array('log_in' => false));

        }
        $variables['log_in'] = $this->session->log_in;
        $this->load->view('default/assets');
        $this->load->view('default/header', $variables);
        $this->load->view($page, $data);
    }
}