<?php

class data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"<span aria-hidden="true">&times;</span></button>
                </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {

        // config
        $config['base_url'] = 'http://localhost/madame/index.php/admin/data_user/index';
        $config['total_rows'] = $this->model_user->countUser();
        $config['per_page'] = 8;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center mt-3 mb-4 shadow p-3 bg-white rounded">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['user'] = $this->model_user->getUser($config['per_page'], $data['start']);

        // $data['user'] = $this->model_user->tampil_user()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->model_user->edit_user($where, 'tb_user')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_user->hapus_user($where, 'tb_user');
        redirect('admin/data_user/index');
    }

    public function update()
    {
        $id                     = $this->input->post('id');
        $nama            = $this->input->post('nama');
        $username             = $this->input->post('username');
        $password               = $this->input->post('password');
        $role_id                  = $this->input->post('role_id');

        $data = array(

            'nama'       => $nama,
            'username'        => $username,
            'password'          => $password,
            'role_id'             => $role_id
        );

        $where = array(
            'id'    => $id
        );

        $this->model_user->update_data($where, $data, 'tb_user');
        redirect('admin/data_user/index');
    }
}
