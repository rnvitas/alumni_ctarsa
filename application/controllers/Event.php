<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        // $this->load->model('Blog_m', 'blog');
    }
    public function index()
    {

        // $data['category'] = $this->blog->getAllType();
        // $data['kabaralumni'] = $this->info->getKabarAlumni();
        // $data['all_blogs'] = $this->info->getAllBlog();
        // $data['terbaru'] = $this->info->getTerbaru();



        $data['content']     = 'webview/event/event_view';
        $data['content_js'] = 'webview/event/event_js';
        $this->load->view('_parts/wrapper', $data);
    }

    public function detail()
    {
        // $id = $_GET['id'];

        // $data['populer'] = $this->blog->getPopuler();
        // $data['category'] = $this->blog->getAllType();
        // $data['detail_information'] = $this->blog->getInformation_by_id($id);
        $data['content']     = 'webview/event/event_detail';
        $data['content_js'] = 'webview/event/event_js';
        $this->load->view('_parts/wrapper', $data);
        // $this->add_count($id);
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

    function populer_section()
    {

        $data['all_populer'] = $this->info->getAllPopuler();
        $data['populer'] = $this->info->getPopuler();
        $data['category'] = $this->info->getAllType();
        $data['content']     = 'webview/blog/popular_view';
        $data['content_js'] = 'webview/event/event_js';
        $this->load->view('_parts/wrapper', $data);
    }


    function newest_section()
    {
        $data['all_terbaru'] = $this->info->getAllTerbaru();
        $data['terbaru'] = $this->info->getTerbaru();
        $data['category'] = $this->info->getAllType();
        $data['content']     = 'webview/blog/terbaru_view';
        $data['content_js'] = 'webview/event/event_js';
        $this->load->view('_parts/wrapper', $data);
    }
}
