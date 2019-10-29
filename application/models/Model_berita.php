<?php

class Model_berita extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('berita');
    }

    public function input_berita($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_berita($where, $table)

    {
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
