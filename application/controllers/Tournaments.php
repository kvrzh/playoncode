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
        $this->load->model(array('Tournaments_model', 'User_model'));
    }

    function index()
    {
        $this->User_model->getUserByLogin('kvrzh');
        $data['tournaments'] = $this->Tournaments_model->getAllTournaments();
        $this->_view('tournaments/main',$data);
    }

    function single()
    {
        $data['tournament'] = $this->Tournaments_model->getTournament($_POST['id']);
        $this->load->view('tournaments/single',$data);
    }
}