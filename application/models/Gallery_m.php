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

    //get show data on paggination with category and or search
    public function getAllGalleryFile($limit, $start)
    {
        $pv = array('Photo', 'Photo & Video');
        $vp = array('Video', 'Photo & Video');
        $this->db->select('a.*, b.name as category, b.id as idtype, c.file, c.type_file, d.link');
        $this->db->from('mast_gallery a');
        $this->db->join('mast_type_gallery b', 'a.id_mast_type_gallery=b.id', 'left');
        $this->db->join('trans_gallery_file c', 'a.id_header=c.id_header_mast_gallery', 'left');
        $this->db->join('trans_gallery_link d', 'a.id_header=d.id_header_mast_gallery', 'left');
        if ($this->uri->segment(2) == 'type') {
            if ($this->input->get('cat') == 'Photo') {
                $this->db->where_in('b.name',  $pv);
            } else if ($this->input->get('cat') == 'Video') {
                $this->db->where_in('b.name',  $vp);
            } else if ($this->input->get('cat') == 'Replay') {
                $this->db->where('b.name',  'Replay');
            }
        }
        if ($this->uri->segment(2) == 'search') {
            $this->db->like('title', $this->input->get('st'));
            if ($this->input->get('cat') == 'Photo') {
                $this->db->where_in('b.name',  $pv);
            } else if ($this->input->get('cat') == 'Video') {
                $this->db->where_in('b.name',  $vp);
            } else if ($this->input->get('cat') == 'Replay') {
                $this->db->where('b.name',  'Replay');
            }
        }
        $this->db->where('a.active', 1);
        $this->db->where('a.publish', 1);
        $this->db->group_by('a.id_header');
        $this->db->limit($limit, $start);

        return $this->db->get()->result();
    }

    //count data
    public function getCountData()
    {
        $pv = array('Photo', 'Photo & Video');
        $vp = array('Video', 'Photo & Video');

        $this->db->select('count(*) as allcount');
        $this->db->from('mast_gallery a');
        $this->db->join('mast_type_gallery b', 'a.id_mast_type_gallery=b.id', 'left');
        $this->db->join('trans_gallery_file c', 'a.id_header=c.id_header_mast_gallery', 'left');
        $this->db->join('trans_gallery_link d', 'a.id_header=d.id_header_mast_gallery', 'left');
        if ($this->uri->segment(2) == 'type') {
            if ($this->input->get('cat') == 'Photo') {
                $this->db->where_in('b.name',  $pv);
            } else if ($this->input->get('cat') == 'Video') {
                $this->db->where_in('b.name',  $vp);
            } else if ($this->input->get('cat') == 'Replay') {
                $this->db->where('b.name',  'Replay');
            }
        }
        if ($this->uri->segment(2) == 'search') {
            $this->db->like('title', $this->input->get('st'));
            if ($this->input->get('cat') == 'Photo') {
                $this->db->where_in('b.name',  $pv);
            } else if ($this->input->get('cat') == 'Video') {
                $this->db->where_in('b.name',  $vp);
            } else if ($this->input->get('cat') == 'Replay') {
                $this->db->where('b.name',  'Replay');
            }
        }
        $this->db->where('a.active', 1);
        $this->db->where('a.publish', 1);
        $this->db->group_by('a.id_header');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result[0]['allcount'];
    }

    //detail
    public function getAllGalleryFile_byids($id)
    {

        $this->db->select('a.*,  a.id_header,b.name as category, b.id as idtype, c.file, c.type_file, d.link');
        $this->db->from('mast_gallery a');
        $this->db->join('mast_type_gallery b', 'a.id_mast_type_gallery=b.id', 'left');
        $this->db->join('trans_gallery_file c', 'a.id_header=c.id_header_mast_gallery', 'left');
        $this->db->join('trans_gallery_link d', 'a.id_header=d.id_header_mast_gallery', 'left');

        $this->db->where('a.active', 1);
        $this->db->where('a.publish', 1);
        $this->db->where('a.ids', $id);

        // $this->db->group_by('a.id_header');
        // $this->db->limit(1);

        return $this->db->get()->result();
    }

    public function getAllGalleryFile_byid($id)
    {

        $this->db->select('a.*, b.name as category, b.id as idtype, c.description, c.date, c.title, d.link');
        $this->db->from('trans_gallery_file a');
        $this->db->join('mast_type_gallery b', 'a.id_header_mast_gallery=b.id', 'left');
        $this->db->join('mast_gallery c', 'a.id_header_mast_gallery=c.id_header', 'left');
        $this->db->join('trans_gallery_link d', 'a.id_header_mast_gallery=d.id_header_mast_gallery', 'left');

        $this->db->where('a.active', 1);
        // $this->db->where('a.publish', 1);
        $this->db->where('a.id_header_mast_gallery', $id);

        // $this->db->group_by('a.id_header');
        // $this->db->limit(1);

        return $this->db->get()->result();
    }

    public function getAllGalleryby_id($id)
    {

        $this->db->select('a.*, b.name as category, b.id as idtype, c.description, c.date, c.title, d.link');
        $this->db->from('trans_gallery_file a');
        $this->db->join('mast_type_gallery b', 'a.id_header_mast_gallery=b.id', 'left');
        $this->db->join('mast_gallery c', 'a.id_header_mast_gallery=c.id_header', 'left');
        $this->db->join('trans_gallery_link d', 'a.id_header_mast_gallery=d.id_header_mast_gallery', 'left');

        $this->db->where('a.active', 1);
        // $this->db->where('a.publish', 1);
        $this->db->where('a.id_header_mast_gallery', $id);

        // $this->db->group_by('a.id_header');
        $this->db->limit(1);

        return $this->db->get()->result();
    }
}
