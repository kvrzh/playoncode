<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 02.10.2016
 * Time: 13:42
 */
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserByLogin($login)
    {
        $this->db->select('*');
        $this->db->where('login', $login);
        $query = $this->db->get('users');
        if ($query->row('id')) {
            $user = $query->row();
        }
        return $user;
    }
    public function registration($data)
    {
        if ($data['password'] != $data['repeat_password']) {
            $this->session->set_flashdata('status', 'Введенные пароли не совпадают');
            redirect(base_url('login'));
        }
        $this->db->select('id');
        $this->db->where('login', $data['login']);
        $this->db->from('users');
        $status = $this->db->count_all_results();
        if ($status != 0) {
            $this->session->set_flashdata('status', 'Пользователь с таким логином уже существует');
            redirect(base_url('login'));
        }
        $this->db->select('id');
        $this->db->where('email', $data['email']);
        $this->db->from('users');
        $status = $this->db->count_all_results();
        if ($status != 0) {
            $this->session->set_flashdata('status', 'Пользователь с таким e-mail уже существует');
            redirect(base_url('login'));
        }
        $data['password'] = encode_pass($data['password']);
        unset($data['repeat_password']);
        $this->db->insert('users', $data);
        $this->session->set_flashdata('status', 'ok');
        redirect(base_url('login'));
    }

    public function login($data)
    {

        $this->db->select('id');
        $this->db->where('login', $data['login']);
        $this->db->where('password', $data['password']);
        $query = $this->db->get('users');
        $id = $query->row('id');
        if ($id) {
            $this->session->set_flashdata('status', 'ok');
            $this->db->select('id,login,email');
            $this->db->where('id', $id);
            $query = $this->db->get('users');
            $user['id'] = $query->row('id');
            $user['login'] = $query->row('login');
            $user['email'] = $query->row('email');
            return $user;

        }
        return false;
    }
}