<?php
class M_buku extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function jml_data_buku()
    {
        return $this->db->get('buku')->num_rows();
    }

    public function data_buku()
    {
        $query = "SELECT buku.id, buku.judul, buku.pengarang, buku.penerbit, buku.tahun, buku.jumlah_buku, buku.jumlah_eksemplar,
         buku.kategori, buku.nomor_kelas, buku.kelas_deposit, buku.deskripsi, buku.no_ISBN, buku.bahasa, buku.subjek,
          buku.abstrak, buku.file_digital, buku.gambar, user.nama_petugas 
          FROM buku LEFT JOIN user ON buku.id_petugas = user.id_petugas";
        return $this->db->query($query)->result_array();
    }

    public function data_buku_limit($perpage, $dimulaiDari)
    {
        // $query = "SELECT buku.id, buku.judul, buku.pengarang, buku.penerbit, buku.tahun, buku.jumlah_buku, buku.jumlah_eksemplar,
        //  buku.kategori, buku.nomor_kelas, buku.kelas_deposit, buku.deskripsi, buku.no_ISBN, buku.bahasa, buku.subjek,
        //   buku.abstrak, buku.file_digital, buku.gambar, user.nama_petugas 
        //   FROM buku LEFT JOIN user ON buku.id_petugas = user.id_petugas";
        // return $this->db->query($query, $perpage, $dimulaiDari)->result_array();
        return $this->db->get('buku', $perpage, $dimulaiDari)->result_array();
    }

    public function dataBukuById($id)
    {
        $query = "SELECT * FROM buku WHERE id='$id'";
        return $this->db->query($query)->row_array();
    }

    public function dataBukuByKategory($kategory, $perPage, $dimulaiDari)
    {
        $this->db->where('kategori', $kategory);
        return $this->db->get('buku', $perPage, $dimulaiDari)->result_array();
    }

    public function cariBuku($textCari, $kategori)
    {
        $kategori = (string)$kategori;
        if ($kategori == "tes") {
            $query1 = "SELECT id, judul, gambar, deskripsi, kategori FROM buku WHERE judul LIKE '$textCari%'";
            return $this->db->query($query1)->result_array();
        } else {
            $query2 = "SELECT judul, gambar, deskripsi, kategori FROM buku WHERE judul LIKE '$textCari%' AND kategori = '$kategori'";
            return $this->db->query($query2)->result_array();
        }
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('buku', $data);
        return $this->db->affected_rows();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('buku');
        return $this->db->affected_rows();
    }

    public function tambahBuku($data)
    {
        $this->db->insert('buku', $data);
        return $this->db->affected_rows();
    }
}
