<?php

/**
 * Created by PhpStorm.
 * User: bizremy
 * Date: 13.10.16
 * Time: 14:24
 */
class Test extends MY_Controller
{
    function index()
    {

        $this->_view('test/main');
    }

    public function ajax()
    {
        $data['name'] = 'Anton';
        $data['surname'] = 'Kovrizhenko';
        $data = json_encode($data);
        print_r($data);
    }
}