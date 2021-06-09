<?php
class M_user extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function jml_data_user()
    {
        return $this->db->get('user')->num_rows();
    }

    public function cek_user($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function allDataUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function tambahUser($data)
    {
        $this->db->insert('user', $data);
        return $this->db->affected_rows();
    }

    public function hapus($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete('user');
        return $this->db->affected_rows();
    }

    public function userById($id)
    {
        $this->db->where('id_petugas', $id);
        return $this->db->get('user')->row_array();
    }
}
