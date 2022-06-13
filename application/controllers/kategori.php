<?php

class kategori extends CI_Controller
{
    public function bunga_tangan()
    {
        $data['bunga_tangan'] = $this->model_kategori->data_bunga_tangan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bunga_tangan', $data);
        $this->load->view('templates/footer');
    }
    public function bunga_meja()
    {
        $data['bunga_meja'] = $this->model_kategori->data_bunga_meja()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bunga_meja', $data);
        $this->load->view('templates/footer');
    }
    public function bunga_standing()
    {
        $data['bunga_standing'] = $this->model_kategori->data_bunga_standing()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bunga_standing', $data);
        $this->load->view('templates/footer');
    }
}
