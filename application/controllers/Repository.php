<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Repository extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        $this->load->model('Repository_m', 'repo');
    }
    public function index()
    {
        $data['all_repo'] = $this->repo->getAllRepository();
        $data['populer'] = $this->repo->getPopuler();

        $data['content']     = 'webview/repository/repository_view';
        $data['content_js'] = 'webview/repository/repository_js';
        $this->load->view('_parts/wrapper', $data);
    }

    public function detail()
    {
        $id = $_GET['id'];

        // // $data['populer'] = $this->blog->getPopuler();
        // $data['category'] = $this->blog->getAllType();
        $data['detail'] = $this->repo->getRepository_by_id($id);
        $data['lainnya'] = $this->repo->getRepository_lainnya($id);

        $data['content']     = 'webview/repository/repository_detail';
        $data['content_js'] = 'webview/repository/repository_js';
        $this->load->view('_parts/wrapper', $data);
        // $this->add_count($id);
    }

    public function preview()
    {
        $id = $_GET['id'];
        $data['detail'] = $this->repo->getRepository_by_id($id);
        // $data['lainnya'] = $this->repo->getRepository_lainnya($id);

        $data['content']     = 'webview/repository/repository_book_preview';
        $data['content_js'] = 'webview/repository/repository_js';
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
