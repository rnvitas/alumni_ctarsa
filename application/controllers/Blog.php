<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        $this->load->model('Blog_m', 'blog');
    }
    public function index()
    {

        $data['category'] = $this->blog->getAllType();
        // $data['kabaralumni'] = $this->info->getKabarAlumni();
        $data['all_blog'] = $this->blog->getAllBlog();
        $data['populer'] = $this->blog->getPopuler();

        $data['terbaru'] = $this->blog->getTerbaru();



        $data['content']     = 'webview/blog/blog_view';
        $data['content_js'] = 'webview/blog/blog_js';
        $this->load->view('_parts/wrapper', $data);
    }

    public function detail($id = "")
    {
        $id = $_GET['id'];

        // $data['populer'] = $this->blog->getPopuler();
        $data['category'] = $this->blog->getAllType();
        $data['detail_blog'] = $this->blog->getBlog_by_id($id);
        $data['content']     = 'webview/blog/detail_view';
        $data['content_js'] = 'webview/blog/blog_js';
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
            $this->blog->update_counter(urldecode($id));
        }
    }
}
