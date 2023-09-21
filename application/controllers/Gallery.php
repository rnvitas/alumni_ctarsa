<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        $this->load->model('Gallery_m', 'gallery_m');
    }
    public function index()
    {
        $data['type_gallery'] = $this->gallery_m->getAllType();
        $data['content']     = 'webview/gallery/gallery_view';
        $data['content_js'] = 'webview/gallery/gallery_js';
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
