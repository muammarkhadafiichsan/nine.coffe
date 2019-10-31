
<?php

class Model_tips_trik extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tips_trik');
    }

    public function input_tips($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_tips($where, $table)

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
    public function detail_tips_trik($Id)
    {
        $result = $this->db->where('Id', $Id)->get('tips_trik');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
