<?php

class model_user extends CI_Model
{
    public function countUser()
    {
        return $this->db->get('tb_user')->num_rows();
    }

    public function getUser($limit, $start)
    {
        return $this->db->get('tb_user', $limit, $start)->result_array();
    }

    public function tampil_user()
    {
        return $this->db->get('tb_user');
    }

    public function edit_user($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function hapus_user($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
