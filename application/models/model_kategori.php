<?php

class model_kategori extends CI_Model
{
    public function data_bunga_tangan()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'bunga tangan'));
    }

    public function count_tangan()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'bunga tangan'))->num_rows();
    }

    public function get_tangan($limit, $start)
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'bunga tangan'), $limit, $start)->result_array();
    }

    public function data_bunga_meja()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'bunga meja'));
    }

    public function data_bunga_standing()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'bunga standing'));
    }
}
