<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"<span aria-hidden="true">&times;</span></button>
                </div>');
            redirect('auth/login');
        }
    }

    public function tambah_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'        => $barang->id_brg,
            'qty'       => 1,
            'price'     => $barang->harga,
            'name'      => $barang->nama_barang,
        );

        $this->cart->insert($data);
        redirect('dashboard/detail_keranjang');
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'        => $barang->id_brg,
            'qty'       => 1,
            'price'     => $barang->harga,
            'name'      => $barang->nama_barang,
        );

        $this->cart->insert($data);
        redirect('Welcome/explore');
    }

    public function tambah_ke_keranjang_1($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'        => $barang->id_brg,
            'qty'       => 1,
            'price'     => $barang->harga,
            'name'      => $barang->nama_barang,
        );

        $this->cart->insert($data);
        redirect('kategori/bunga_tangan');
    }

    public function tambah_ke_keranjang_2($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'        => $barang->id_brg,
            'qty'       => 1,
            'price'     => $barang->harga,
            'name'      => $barang->nama_barang,
        );

        $this->cart->insert($data);
        redirect('kategori/bunga_meja');
    }

    public function tambah_ke_keranjang_3($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'        => $barang->id_brg,
            'qty'       => 1,
            'price'     => $barang->harga,
            'name'      => $barang->nama_barang,
        );

        $this->cart->insert($data);
        redirect('kategori/bunga_standing');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/detail_keranjang');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $data['invoice'] = $this->model_invoice->ambil_id_invoice($is_processed);
            $data['pesanan'] = $this->model_invoice->total_id_pesanan($is_processed);
            $this->load->view('proses_pesanan', $data);
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diProses";
        }
    }
    public function rubah_proses_pesanan()
    {
        $get_id = $_GET['id'];
        $is_processed = $this->model_invoice->update_invoice($get_id);
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $data['invoice'] = $this->model_invoice->ambil_id_invoice($get_id);
            $data['pesanan'] = $this->model_invoice->total_id_pesanan($get_id);
            $this->load->view('proses_pesanan', $data);
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diProses";
        }
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }

    function print_invoice()
    {
        $get_id = $this->uri->segment(3);
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($get_id);
        $data['total_pesanan'] = $this->model_invoice->total_id_pesanan($get_id);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($get_id);
        $this->load->view('templates/header');
        $this->load->view('print_invoice', $data);
    }
}
