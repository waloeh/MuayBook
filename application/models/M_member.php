<?php
class M_member extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function jml_data_member()
    {
        return $this->db->get('member')->num_rows();
    }

    public function dataMember()
    {
        return $this->db->get('member')->result_array();
    }

    public function delete($id)
    {
        $this->db->where('id_member', $id);
        $this->db->delete('member');
        return $this->db->affected_rows();
    }

    public function memberById($id)
    {
        $this->db->where('id_member', $id);
        return $this->db->get('member')->row_array();
    }
}
