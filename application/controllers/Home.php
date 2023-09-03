<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        // $this->load->model('Model', 'home');
    }
    public function index()
    {

        $data['content']     = 'webview/home/home_view';
        $data['content_js'] = 'webview/home/home_js';
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
