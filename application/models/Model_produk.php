<?php

class Model_produk extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('produk');
    }
}
