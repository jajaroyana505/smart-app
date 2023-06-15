<?php
class Tamu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tamu', 'tamu');

        $this->role = $this->session->userdata('role');
        if (!$this->role) {
            redirect(base_url('auth'));
        }
        if ($this->session->userdata('role') == 'penduduk') {
            redirect(base_url('user'));
        }
    }
    public function index()
    {

        $data['title'] = "Daftar Tamu";
        $data['tamu'] = $this->tamu->get_tamu();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('tamu/index', $data);
        $this->load->view('template/footer');
    }


    public function tambah_tamu()
    {
        if ($this->session->userdata('role') == 'penduduk') {
            redirect(base_url('user'));
        }

        $this->form_validation->set_rules($this->tamu->rules());

        if ($this->form_validation->run() == TRUE) {
            if ($this->tamu->tambah()) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            } else {
                $this->session->set_flashdata('error', 'Data gagal disimpan.');
            }
            redirect(base_url('tamu'));
        } else {
            $this->form_tambahTamu();
        }
    }

    public function form_tambahTamu()
    {
        $data['title'] = "Form Tambah Tamu";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('tamu/form_tambah');
        $this->load->view('template/footer');
    }
}
