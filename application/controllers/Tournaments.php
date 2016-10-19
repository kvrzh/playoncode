<?php

/**
 * Created by PhpStorm.
 * User: bizremy
 * Date: 17.10.16
 * Time: 10:28
 */
class Tournaments extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Tournaments_model'));
    }

    function index()
    {
        $data['tournaments'] = $this->Tournaments_model->getAllTournaments();
        $this->_view('tournaments/main',$data);
    }

    function single()
    {
        $this->Tournaments_model->getTournament($_POST['limit']);
        $data['test'] = 'wqeewqewewqewqeweqweqwwqwdqdwdwqdw';
        $data['limit'] = $_POST['limit'];

        $this->load->view('tournaments/single',$data);
    }
}