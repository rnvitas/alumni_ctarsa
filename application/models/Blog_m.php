<?php defined('BASEPATH') or exit('No direct script access allowed');

class Blog_m extends CI_Model
{

    var $table_type = 'mast_cat_blogs';
    var $table = 'trans_blogs';

    public function getAllType()
    {
        $this->db->select('*');
        $this->db->from('mast_cat_blogs');
        // $this->db->where('id != 4 and id !=3');
        $this->db->where('active', 1);
        $this->db->where('publish', 1);


        $query = $this->db->get();
        return $query->result();
        // return $this->db->get($this->table_type)->result();
    }


    public function getBlog_by_id($id)
    {
        $this->db->select('tr.id, tr.*, m.category_name ');
        $this->db->from('trans_blogs tr');
        $this->db->join('mast_cat_blogs m', 'tr.id_cat_blogs=m.id', 'left');
        $this->db->where('tr.id', $id);
        $this->db->where('tr.active', 1);
        $this->db->where('tr.publish', 1);
        $query = $this->db->get();
        return $query->result();
    }


    public function getAllBlog()
    {
        $this->db->select('tr.id, tr.*, m.category_name ');
        $this->db->from('trans_blogs tr');
        $this->db->join('mast_cat_blogs m', 'tr.id_cat_blogs=m.id', 'left');
        // $this->db->where('tr.id_cat_blogs', 3);
        $this->db->where('tr.active', 1);
        $this->db->where('tr.publish', 1);
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getPopuler()
    {
        $this->db->select('tr.id, tr.*, m.category_name ');
        $this->db->from('trans_blogs tr');
        $this->db->join('mast_cat_blogs m', 'tr.id_cat_blogs=m.id', 'left');
        $this->db->where('tr.active', 1);
        $this->db->where('tr.publish', 1);
        $this->db->order_by('count', 'desc');
        $this->db->limit('6');
        $query = $this->db->get();
        return $query->result();
    }



    public function getTerbaru()
    {
        $this->db->select('tr.id, tr.*, m.category_name ');
        $this->db->from('trans_blogs tr');
        $this->db->join('mast_cat_blogs m', 'tr.id_cat_blogs=m.id', 'left');
        $this->db->where('tr.active', 1);
        $this->db->where('tr.publish', 1);
        $this->db->order_by('date', 'desc');
        $this->db->limit('6');
        $query = $this->db->get();
        return $query->result();
    }


    function update_counter($id)
    {
        $this->db->where('id', urldecode($id));
        $this->db->select('trans_blogs.count');
        $count = $this->db->get('trans_blogs')->row();
        $this->db->where('id', urldecode($id));
        $this->db->set('count', ($count->count + 1));
        $this->db->update('trans_blogs');
    }

    public function getdataCategory($cat)
    {
        $this->db->select('tr.id, tr.*, m.category_name ');
        $this->db->from('trans_blogs tr');
        $this->db->join('mast_cat_blogs m', 'tr.id_cat_blogs=m.id', 'left');
        $this->db->where('tr.id_cat_blogs', $cat);
        $this->db->where('tr.active', 1);
        $this->db->where('tr.publish', 1);
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
}
