<?php

class Model_event extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('event');
    }

    public function input_event($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_event($where, $table)

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
