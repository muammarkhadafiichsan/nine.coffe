<?php

class Model_profile2 extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('profile2');
    }

    public function input_profile($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_profile($where, $table)

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
