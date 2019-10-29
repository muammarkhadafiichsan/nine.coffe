<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_awards extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('awards');
    }

    public function input_awards($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit($where, $table)

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
