<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['content']     = 'webview/home/home_view';
        $data['content_js']  = 'webview/home/home_js';
        $this->load->view('_parts/wrapper', $data);
    }
}
