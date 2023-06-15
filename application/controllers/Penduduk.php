<?php

class Penduduk extends CI_Controller
{
	public $role;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_penduduk');
		$this->load->model('model_alamat');
		$this->load->model('model_user');


		$this->role = $this->session->userdata('role');
		if (!$this->role) {
			redirect(base_url('auth'));
		}
	}
	public function index()
	{
		$this->load->library('pagination');

		// Configurasi Pagenation
		$config['base_url'] = base_url() . '/penduduk/index/';
		$config['total_rows'] = $this->model_penduduk->hitung();
		$config['per_page'] = 4;

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

		$data['title'] = "Data Penduduk";
		$data['start'] = $this->uri->segment('3');
		$data['total_rows'] = $config['total_rows'];
		$data['penduduk'] = $this->model_penduduk->get_penduduk($config['per_page'], $data['start']);


		// var_dump($data['penduduk']);
		// die;
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('penduduk/daftar_penduduk', $data);
		$this->load->view('template/footer');
	}

	public function form_tambah()
	{
		if ($this->session->userdata('role') == 'penduduk') {
			redirect(base_url('user'));
		}
		$this->load->model('model_rt');
		$this->load->model('model_rw');
		$this->load->model('model_dusun');
		if ($this->role == 'admin') {
			$data = [
				'rt' => $this->model_rt->get_rt(),
				'rw' => $this->model_rw->get_rw(),
				'dusun' => $this->model_dusun->get_dusun(),
			];
		} else {
			$data = [
				'rt' => $this->session->userdata('kode_rt'),
				'rw' => $this->session->userdata('kode_rw'),
				'dusun' => $this->session->userdata('kode_dusun'),
				'nama_dusun' => $this->session->userdata('nama_dusun'),
			];
		}
		$data['title'] = "Form tambah penduduk";
		// var_dump($data);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('penduduk/form_tambah_penduduk.php', $data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{


		$this->form_validation->set_rules($this->model_penduduk->rules());
		$this->form_validation->set_rules($this->model_alamat->rules());


		if ($this->form_validation->run() == TRUE) {
			if ($this->model_penduduk->cek_nik($this->input->post('nik')) > 0) {
				$this->session->set_flashdata('error', 'NIK Sudah terdaftar');
				return $this->form_tambah();
			}
			$result_alamat  = $this->model_alamat->tambah();
			// var_dump($result_alamat);
			// die;
			if ($this->model_penduduk->tambah($result_alamat)) {

				$this->model_user->buat();
				$this->session->set_flashdata('success', 'Data berhasil disimpan.');
				redirect(base_url('penduduk'));
			}
		} else {
			$this->form_tambah();
		}
		// var_dump($this->input->post());
	}

	public function ubah()
	{
		$this->load->model('model_rt');
		$this->load->model('model_rw');
		$this->load->model('model_dusun');
		$id = $this->uri->segment('3');
		$data_penduduk = $this->model_penduduk->getPendudukById($id);

		if ($data_penduduk == null) {
			redirect('penduduk');
		}

		if ($this->role == 'admin') {
			$data = [
				'rt' => $this->model_rt->get_rt(),
				'rw' => $this->model_rw->get_rw(),
				'dusun' => $this->model_dusun->get_dusun(),
			];
		} else {
			$data = [
				'rt' => $this->session->userdata('kode_rt'),
				'rw' => $this->session->userdata('kode_rw'),
				'dusun' => $this->session->userdata('kode_dusun'),
			];
		}
		$data['data_penduduk'] = $data_penduduk;

		$data['title'] = "Ubah data penduduk";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('penduduk/ubah_penduduk', $data);
		$this->load->view('template/footer');
	}


	function update()
	{
		$this->form_validation->set_rules($this->model_penduduk->rules());
		$this->form_validation->set_rules($this->model_alamat->rules());


		if ($this->form_validation->run() == true) {
			$result_alamat  = $this->model_alamat->tambah();
			$result_penduduk = $this->model_penduduk->update_data($result_alamat, $this->input->post('id'));

			if ($result_penduduk) {
				$this->session->set_flashdata('success', 'Data berhasil diperbarui.');
				redirect(base_url('penduduk/detail_penduduk/' . $this->input->post('id')));
			} else {
				$this->session->set_flashdata('error', 'Data gagal disimpan.');
				redirect(base_url("penduduk/ubah/" . $this->input->post('id')));
			}
		} else {

			$this->session->set_flashdata('error', 'Data gagal disimpan.');
			redirect(base_url("penduduk/ubah/" . $this->input->post('id')));
		}
	}

	public function ubah_foto()
	{
		$id = $this->input->post('id');
		$foto_lama = $this->input->post('foto_lama');
		$result = $this->model_penduduk->update_foto($id);
		if ($result) {
			if ($foto_lama != "default.jpg") {
				unlink(FCPATH . 'assets/img/profile/' . $foto_lama);
			}
			$this->session->set_flashdata('success', 'Foto berhasil diperbarui.');
			redirect(base_url("penduduk/detail_penduduk/" . $this->input->post('id')));
		} else {
			$this->session->set_flashdata('error', 'Foto gagal diperbarui.');
			redirect(base_url("penduduk/detail_penduduk/" . $this->input->post('id')));
		}
	}


	public function hapus_penduduk()
	{

		$this->load->model('model_penduduk');
		$id = $this->uri->segment('3');

		$this->model_penduduk->hapus($id);

		redirect(base_url('penduduk'));
	}

	public function detail_penduduk()
	{
		$id = $this->uri->segment('3');
		$data_penduduk = $this->model_penduduk->getPendudukById($id);
		if ($data_penduduk == null) {
			redirect('penduduk');
		}

		$data = [
			"id" => $data_penduduk->id,
			"nik" => $data_penduduk->nik,
			"nama" => $data_penduduk->nama,
			"kelamin" => $data_penduduk->kelamin,
			"ttl" => $data_penduduk->tempat_lahir . ", " . format_tanggal($data_penduduk->tanggal_lahir),
			"agama" => $data_penduduk->agama,
			"alamat" => "Kp. $data_penduduk->nama_dusun $data_penduduk->kode_rt/$data_penduduk->kode_rw No.$data_penduduk->no_rumah",
			"status_perkawinan" => $data_penduduk->status_perkawinan,
			"pekerjaan" => $data_penduduk->pekerjaan,
			"pendidikan" => $data_penduduk->pendidikan,
			"nama_ayah" => $data_penduduk->nama_ayah,
			"nama_ibu" => $data_penduduk->nama_ibu,
			"foto" => $data_penduduk->foto,
		];
		$data['title'] = "Detail penduduk";


		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('penduduk/detail_penduduk.php', $data);
		$this->load->view('template/footer.php');
	}
}
