<?php

class Model_profile extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('profile');
    }

    public function input_profile($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
