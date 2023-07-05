<?php
class Kematian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kematian', 'kematian');
        $this->load->model('model_penduduk', 'penduduk');


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
        $this->load->library('pagination');

        // Configurasi Pagenation
        $config['base_url'] = 'http://localhost/smart-app/kematian/index/';
        $config['total_rows'] = $this->kematian->hitung();
        $config['per_page'] = 2;

        // styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-end ">';
        $config['full_tag_close'] = '</ul></nav>';

        $config["first_link"] = "First";
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tag_close'] = '</li>';

        $config["last_link"] = "Last";
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config["next_link"] = "&raquo";
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config["prev_link"] = "&laquo";
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item "><a class="page-link bg-success text-white" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item ">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link bg-white border-success text-success');

        // Inisialisasi Pagenation
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment('3');

        $data['penduduk_meninggal'] = $this->kematian->get_kematian($config['per_page'], $data['start']);

        // var_dump($data['penduduk_meninggal']);
        // die;
        $data['title'] = "Data Penduduk Meninggal";

        $this->load->view('template/header.php', $data);
        $this->load->view('template/sidebar.php');
        $this->load->view('kematian/daftar_kematian', $data);
        $this->load->view('template/footer');
    }

    public function form()
    {
        $nik = $this->input->post('nik');
        if ($this->penduduk->cek_nik($nik) == 0) {
            $this->session->set_flashdata('error', 'Nik tidak terdaftar');
            redirect(base_url('kematian'));
        }

        $this->view_form();
    }

    public function simpan_data()
    {
        $this->form_validation->set_rules($this->kematian->rules());
        if ($this->form_validation->run() == FALSE) {
            $this->view_form();
        } else {
            $nik = $this->input->post('nik');
            $this->penduduk->meninggal($nik);
            $this->kematian->simpan();
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            redirect(base_url('kematian'));
        }
    }

    private function hitung_umur($tanggal_lahir, $tanggal_meninggal)
    {
        $birthDate = new DateTime($tanggal_lahir);
        $deathDate = new DateTime($tanggal_meninggal);
        if ($birthDate > $deathDate) {
            exit("0");
        }
        $y = $deathDate->diff($birthDate)->y;
        return $y;
    }

    private function view_form()
    {
        $this->load->model('model_penduduk');


        $nik = $this->input->post('nik');

        $data_penduduk = $this->model_penduduk->getPendudukByNik($nik);

        // var_dump($alamat_penduduk);
        // die;

        $data = [
            "nik" => $data_penduduk->nik,
            "nama" => $data_penduduk->nama,
            "kelamin" => $data_penduduk->kelamin,
            "alamat" => "$data_penduduk->nama_dusun $data_penduduk->kode_rt/$data_penduduk->kode_rw No.$data_penduduk->no_rumah"
        ];

        $data['title'] = "Formulir Kematian";

        $this->load->view('template/header.php', $data);
        $this->load->view('template/sidebar.php');
        $this->load->view('kematian/form_data_kematian.php', $data);
        $this->load->view('template/footer.php');
    }

    public function detail_kematian()
    {
        $id = $this->uri->segment('3');
        $data_kematian = $this->kematian->getKematianById($id);

        if ($data_kematian == null) {
            redirect('kematian');
        }
        $data = [
            "id" => $data_kematian->id,
            "nik" => $data_kematian->nik,
            "nama" => $data_kematian->nama,
            "kelamin" => $data_kematian->kelamin,
            "ttl" => $data_kematian->tempat_lahir . ", " . format_tanggal($data_kematian->tanggal_lahir),
            "agama" => $data_kematian->agama,
            "pekerjaan" => $data_kematian->pekerjaan,
            "alamat" => "Kp. $data_kematian->nama_dusun $data_kematian->kode_rt/$data_kematian->kode_rw No.$data_kematian->no_rumah",
            "hari" => get_hari($data_kematian->tanggal_meninggal),
            "tanggal" => format_tanggal($data_kematian->tanggal_meninggal),
            "umur" => $this->hitung_umur($data_kematian->tanggal_lahir, $data_kematian->tanggal_meninggal) . " Tahun",
            "penyebab" => $data_kematian->penyebab_meninggal,
            "tempat" => $data_kematian->tempat_meninggal,
        ];
        $data['title'] = "Detail Penduduk Meninggal";

        $this->load->view('template/header.php', $data);
        $this->load->view('template/sidebar.php');
        $this->load->view('kematian/detail_kematian.php', $data);
        $this->load->view('template/footer.php');
    }
}
