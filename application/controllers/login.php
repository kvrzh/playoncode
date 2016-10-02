<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 01.10.2016
 * Time: 10:16
 */
class login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('User_model'));
    }

    function index()
    {
        $data['status'] = $this->session->flashdata('status');
        $this->_view('login/main', $data);
    }

    function registration()
    {
        $data = array(
            'date' => date('c'),
            'login' => $this->input->post('login'),
            'password' => $this->input->post('password'),
            'repeat_password' => $this->input->post('repeatpass'),
            'email' => $this->input->post('email')
        );
        $this->User_model->registration($data);
    }


    function log_in()
    {
        $data = array(
            'login' => $this->input->post('login'),
            'password' => encode_pass($this->input->post('password'))
        );
        $user = $this->User_model->login($data);
        if ($user) {
            $this->session->set_userdata($user);
            $this->session->set_userdata(array('successful' => true));
            redirect(base_url('login/dashboard') . '/' . $user['id']);
        } else {
            $this->session->set_flashdata('status', 'fail');
            redirect(base_url('login'));
        }
    }

    function dashboard($id = null)
    {
        if ($this->session->successful != true) {
            $this->session->set_flashdata('status', 'log_in_false');
            redirect(base_url('login'));
        }
        if ($id == null) {
            redirect(base_url('login/dashboard') . '/' . $this->session->id);
        }
        $data['id'] = $this->session->id;
        $data['login'] = $this->session->login;
        $data['email'] = $this->session->email;
        $this->_view('login/dashboard', $data);
    }
}