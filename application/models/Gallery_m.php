<?php defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_m extends CI_Model
{

    var $table_type = 'mast_type_gallery';

    public function getAllType()
    {
        $this->db->select('* ');
        $this->db->from('mast_type_gallery');
        $this->db->where('id != 4 and id !=3');
        $query = $this->db->get();
        return $query->result();
        // return $this->db->get($this->table_type)->result();
    }
}
