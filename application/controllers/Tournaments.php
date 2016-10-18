<?php

/**
 * Created by PhpStorm.
 * User: bizremy
 * Date: 17.10.16
 * Time: 10:28
 */
class Tournaments extends MY_Controller
{
    function index()
    {
        $this->_view('tournaments/main');
    }

    function single()
    {
        $this->load->view('tournaments/single');
    }
}