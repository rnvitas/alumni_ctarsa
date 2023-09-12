<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Information extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        // $this->load->model('Model', 'home');
    }
    public function index()
    {

        $data['content']     = 'webview/information/information_view';
        $data['content_js'] = 'webview/information/information_js';
        $this->load->view('_parts/wrapper', $data);
    }
}
