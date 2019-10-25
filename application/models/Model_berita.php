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
}
