<?php

class Model_invoice extends CI_Model{
    public function index ()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama           =$this->input->post('nama');
        $alamat         =$this->input->post('alamat');
        $pengiriman         =$this->input->post('pengiriman');
        $bank         =$this->input->post('bank');
        $invoice = array (
            'nama'          => $nama,
            'alamat'        => $alamat,
            'pengiriman'        => $pengiriman,
            'bank'        => $bank,
            'tgl_pesan'     => date('Y-m-d H:i:s'),
            'batas_bayar'   => date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'), date('m'), date('d') + 1, date('Y'))),
            'bukti_pembayaran' => "",
            'status_pembayaran' => "proses"
        );
        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array(
                'id_invoice'        => $id_invoice,
                'id_brg'            => $item['id'],
                'nama_barang'       => $item['name'],
                'jumlah'            => $item['qty'],
                'harga'             => $item['price'],
            );
            $this->db->insert('tb_pesanan', $data);
        }
        return $id_invoice;
    }

    function update_invoice($id_invoice)
    {
        $name_file = $_FILES['bukti_pembayaran']['name'];
        $tmp_file = $_FILES['bukti_pembayaran']['tmp_name'];
        move_uploaded_file($tmp_file, "assets/bukti_pembayaran/".$name_file);
        $invoice = array (
            'bukti_pembayaran' => $name_file
        );

        $this->db->where("id", $id_invoice);
        $this->db->update("tb_invoice",$invoice);

        return $id_invoice;
    }

    function update_status($id_invoice)
    {
        $invoice = array (
            'status_pembayaran' => "selesai"
        );

        $this->db->where("id", $id_invoice);
        $this->db->update("tb_invoice",$invoice);

        return $id_invoice;
    }
    
    public function tampil_data()
    {
        $result = $this->db->get('tb_invoice');
            return $result->result();
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
        if($result->num_rows() > 0){
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
    }
    
    public function total_id_pesanan($id_invoice)
    {
        $this->db->from('tb_pesanan');
        $this->db->select_sum('harga');
        $result = $this->db->where('id_invoice', $id_invoice)->get()->row();
        return $result->harga;
        // if($result->num_rows() > 0){
        // } else {
        //     return false;
        // }
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}