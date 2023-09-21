<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Information extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        $this->load->model('Information_m', 'info');
    }
    public function index()
    {

        $data['category'] = $this->info->getAllType();
        $data['kabaralumni'] = $this->info->getKabarAlumni();
        $data['populer'] = $this->info->getPopuler();
        $data['terbaru'] = $this->info->getTerbaru();



        $data['content']     = 'webview/information/information_view';
        $data['content_js'] = 'webview/information/information_js';
        $this->load->view('_parts/wrapper', $data);
    }

    public function detail($id = '')
    {
        $id = $_GET['id'];

        $data['populer'] = $this->info->getPopuler();
        $data['category'] = $this->info->getAllType();
        $data['detail_information'] = $this->info->getInformation_by_id($id);
        $data['content']     = 'webview/information/detail_information_view';
        $data['content_js'] = 'webview/information/information_js';
        $this->load->view('_parts/wrapper', $data);
        $this->add_count($id);
    }

    function add_count($id)
    {
        // $id = $_GET['id'];
        // load cookie helper
        $this->load->helper('cookie');
        // this line will return the cookie which has slug name
        $check_visitor = $this->input->cookie(urldecode($id), FALSE);
        // this line will return the visitor ip address
        $ip = $this->input->ip_address();
        // if the visitor visit this article for first time then //
        // //set new cookie and update article_views column ..
        // //you might be notice we used slug for cookie name and ip
        // //address for value to distinguish between articles views
        if ($check_visitor == false) {
            $cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => time() + 7200, "secure" => false);
            $this->input->set_cookie($cookie);
            $this->info->update_counter(urldecode($id));
        }
    }
}
