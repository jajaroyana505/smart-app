<?php
class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_penduduk', 'penduduk');
        $this->load->model('model_surat', 'surat');


        $role = $this->session->userdata('role');
        if (!$role) {
            redirect(base_url('auth'));
        }
        if ($this->session->userdata('role') == 'penduduk') {
            redirect(base_url('user'));
        }
    }
    public function index()
    {

        $data = [
            "surat" => $this->surat->get_surat(),
            "pengajuan" => $this->surat->get_pengajuan()
        ];
        $data['title'] = "Surat";
        // var_dump($data);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('surat/index.php', $data);
        $this->load->view('template/footer.php');
    }
    public function form()
    {
        $nik = $this->input->post('nik');
        if ($this->penduduk->cek_nik($nik) == 0) {
            $this->session->set_flashdata('error', 'Nik tidak terdaftar');
            redirect(base_url('surat'));
        }

        $this->form_pengajuan();
    }
    public function form_pengajuan()
    {
        $nik = $this->input->post('nik');

        $data_penduduk = $this->penduduk->getPendudukByNik($nik);

        // var_dump($alamat_penduduk);
        // die;

        $data = [
            "nik" => $data_penduduk->nik,
            "nama" => $data_penduduk->nama,
            "kelamin" => $data_penduduk->kelamin,
            "ttl" => format_tanggal($data_penduduk->tanggal_lahir),
            "alamat" => "$data_penduduk->nama_dusun $data_penduduk->kode_rt/$data_penduduk->kode_rw No.$data_penduduk->no_rumah"
        ];
        $data['title'] = "Pengajuan";
        // var_dump($data);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('surat/form_pengajuan.php');
        $this->load->view('template/footer.php');
    }
    public function simpan_pengajuan()
    {
        $this->form_validation->set_rules($this->surat->rules());
        if ($this->form_validation->run() == TRUE) {
            $this->surat->buat();
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            redirect(base_url('surat'));
        } else {
            $this->form_pengajuan();
        }
    }

    public function tolak()
    {
        $no_surat = $this->uri->segment('3');
        $result = $this->surat->tolak_pengajuan($no_surat);
        if ($result) {
            $this->session->set_flashdata('success', 'pengajuan berhasil ditolak.');
            redirect(base_url('surat'));
        }
    }
    public function terima()
    {
        $no_surat = $this->uri->segment('3');
        $result = $this->surat->terima_pengajuan($no_surat);
        if ($result) {
            $this->session->set_flashdata('success', 'pengajuan berhasil diterima.');
            redirect(base_url('surat'));
        }
    }

    public function cetak_surat()
    {
        $no_surat = $this->uri->segment('3');
        $data = $this->surat->detail_surat($no_surat);


        if ($data['jenis_surat'] == 'SP') {
            $this->load->view('surat/template_surat', $data);
        } else {
            $this->load->view('surat/template_surat_sktm', $data);
        }
    }

    public function detail()
    {
        $no_surat = $this->uri->segment('3');
        $data = $this->surat->detail_surat($no_surat);
        // var_dump($data);
        $data['title'] = "Detail Surat";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('surat/detail_surat', $data);
        $this->load->view('template/footer');
    }


    public function riwayat_pengajuan()
    {
        $data['riwayat'] = $this->surat->get_riwayat();
        $data['title'] = "Riwayat Pengajuan Surat";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('surat/riwayat_surat', $data);
        $this->load->view('template/footer');
    }
}
