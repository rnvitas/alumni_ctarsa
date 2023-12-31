<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        $this->load->model('Forum_m', 'forum');
    }
    public function index()
    {
        $data['threads']     = $this->forum->getThreads_me();
        $data['content']     = 'webview/forum/forum_view';
        $data['content_js'] = 'webview/forum/forum_js';
        $this->load->view('_parts/wrapper', $data);
    }

    public function all_forum()
    {
        $data['threads']     = $this->forum->getThreads();
        $data['content']     = 'webview/forum/all_forum_view';
        $data['content_js'] = 'webview/forum/forum_js';
        $this->load->view('_parts/wrapper', $data);
    }

    public function detail()
    {

        $data['content']     = 'webview/forum/forum_detail';
        $data['content_js'] = 'webview/forum/forum_js';
        $this->load->view('_parts/wrapper', $data);
    }


    // public function save()
    // {
    //     $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    //     $this->poling->save(
    //         array(

    //             'created'           => $date->format('Y-m-d H:i:s'),
    //             'id_capres'      => $this->input->post('capres'),
    //             'id_cawapres'      => $this->input->post('cawapres'),
    //         ),
    //         array('id' => $this->input->post('id_add'))
    //     );
    //     echo json_encode(array("status" => TRUE));
    // }
}
