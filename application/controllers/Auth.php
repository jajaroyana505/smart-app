<?php
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user', 'user');
    }



    public function index()
    {

        if ($this->session->userdata('role')) {
            redirect(base_url('penduduk'));
        }
        $this->form_validation->set_rules($this->user->rules());
        if ($this->form_validation->run() == TRUE) {
            $result = $this->user->cek();

            if ($result === true) {
                $nik = $this->input->post('nik');
                $data_user = $this->user->getUserByNik($nik);
                $this->session->set_userdata($data_user);
                if ($this->session->userdata('role') == 'admin' or $this->session->userdata('role') == 'ketua_rt') {
                    redirect(base_url('admin'));
                } else {
                    redirect(base_url("user"));
                }
            } else {
                $this->session->set_flashdata('error', "$result");
                $this->load->view('auth/login');
            }
        } else {
            $this->load->view('auth/login');
        }
    }

    public function logout()
    {
        $data = ['nik', 'role'];
        $this->session->unset_userdata($data);
        session_destroy();
        redirect(base_url('auth'));
    }
}
