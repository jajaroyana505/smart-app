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

    public function ubah_tamu()
    {
        if ($this->session->userdata('role') == 'penduduk') {
            redirect(base_url('user'));
        }

        $this->form_validation->set_rules($this->tamu->rules());

        if ($this->form_validation->run() == TRUE) {
            if ($this->tamu->ubah()) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            } else {
                $this->session->set_flashdata('error', 'Data gagal disimpan.');
            }
            redirect(base_url('tamu'));
        } else {
            $this->form_ubah_tamu();
        }
    }

    public function form_ubah_tamu()
    {
        $data['title'] = "Form Ubah Tamu";
        $data_tamu = $this->tamu->getTamuById(['id_tamu' => $this->uri->segment(3)]);

        $data['data_tamu'] = $data_tamu;

        // var_dump($data['data_tamu']);
        // die;

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('tamu/form_ubah', $data);
        $this->load->view('template/footer');
    }

    function update()
    {
        $this->form_validation->set_rules($this->tamu->rules());

        if ($this->form_validation->run() == true) {
            $result_tamu = $this->tamu->update_data($this->input->post('id_tamu'));

            if ($result_tamu) {
                $this->session->set_flashdata('success', 'Data berhasil diperbarui.');
                redirect(base_url('tamu'));
            } else {
                $this->session->set_flashdata('error', 'Data gagal disimpan.');
                redirect(base_url("tamu"));
            }
        } else {

            $this->session->set_flashdata('error', 'Data gagal disimpan.');
            redirect(base_url("tamu"));
        }
    }
}
