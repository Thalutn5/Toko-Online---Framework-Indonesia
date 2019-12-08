<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBarang extends CI_Model
{
    public function tampilBarang()
    {
        return $this->db->get('tb_barang');
    }

    public function tambahBarang($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editBarang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateBarang($data, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
