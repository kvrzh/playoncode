<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 29.09.2016
 * Time: 22:29
 */
class Main extends MY_Controller
{
    function index()
    {

        if (!isset($this->session->first_time)) {
            $this->session->set_userdata(array('first_time' => true));

        }
        $data['first_time'] = $this->session->first_time;
        $this->_view('main/main', $data);
        $this->session->set_userdata(array('first_time' => false));
    }
}