<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_penduduk", 'penduduk');
		$this->load->model("model_surat", 'surat');
		$this->load->model("model_tamu", 'tamu');

		$this->role = $this->session->userdata('role');
		if (!$this->role) {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{

		$id = $this->session->userdata('id');
		$data_penduduk = $this->penduduk->getPendudukById($id);
		$data_surat = $this->surat->get_suratbyNik();



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

		$data['surat'] = $data_surat;
		$data['title'] = "Home";

		$this->load->view('template/header.php', $data);
		$this->load->view('user/index.php', $data);
		$this->load->view('template/footer.php');
	}

	public function tetangga()
	{
		$rt = $this->session->userdata('kode_rt');
		$tetangga = $this->penduduk->getPendudukByRt($rt);
		$data['tetangga'] = $tetangga;
		$data['title'] = "Daftar Tetangga";
		$this->load->view('template/user_header.php', $data);
		$this->load->view('user/tetangga.php', $data);
		$this->load->view('template/user_footer.php');
	}

	public function buat_surat()
	{
		$nik = $this->session->userdata('nik');

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
		# code...
		$data['title'] = "Layanan Pembuatan Surat";
		$this->load->view('template/user_header.php', $data);
		$this->load->view('user/form_pengajuan.php');
		$this->load->view('template/user_footer.php');
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

	public function buku_tamu()
	{
		$tamu = $this->tamu->get_tamu();
		$data['tamu'] = $tamu;
		$data['title'] = "Daftar Tamu";
		$this->load->view('template/user_header.php', $data);
		$this->load->view('user/tamu.php', $data);
		$this->load->view('template/user_footer.php');
	}

	public function profile()
	{
		$data = [
			"nik" => $this->session->userdata('nik'),
			"nama" => $this->session->userdata('nama'),
			"kelamin" => $this->session->userdata('kelamin'),
			"ttl" => $this->session->userdata('tempat_lahir') . ", " . format_tanggal($this->session->userdata('tanggal_lahir')),
			"jabatan" => $this->session->userdata('role'),
		];
		$data['title'] = "Profile";
		$this->load->view('template/header.php', $data);
		$this->load->view('template/sidebar.php');
		$this->load->view('ketua_rt/profile.php', $data);
		$this->load->view('template/footer.php');
	}

	public function detail_penduduk()
	{
		$data['title'] = "Detail";

		$this->load->view('template/user_header.php', $data);
		$this->load->view('user/detail_penduduk.php', $data);
		$this->load->view('template/user_footer.php');
	}

	public function ubah()
	{
		$this->load->model('model_rt');
		$this->load->model('model_rw');
		$this->load->model('model_dusun');
		$this->load->model('model_penduduk');
		$id = $this->uri->segment('3');
		$data_penduduk = $this->penduduk->getPendudukById($id);


		if ($data_penduduk == null) {
			redirect('user');
		}


		$data = [
			'rt' => $this->session->userdata('kode_rt'),
			'rw' => $this->session->userdata('kode_rw'),
			'dusun' => $this->session->userdata('kode_dusun'),
		];

		$data['data_penduduk'] = $data_penduduk;

		$data['title'] = "Ubah Data Penduduk";
		$this->load->view('template/user_header.php', $data);
		$this->load->view('user/ubah_penduduk.php', $data);
		$this->load->view('template/user_footer.php');
	}

	function update()
	{
		$this->load->model('model_penduduk');
		$this->load->model('model_alamat');
		$this->form_validation->set_rules($this->model_penduduk->rules());
		$this->form_validation->set_rules($this->model_alamat->rules());


		if ($this->form_validation->run() == true) {
			$result_alamat  = $this->model_alamat->tambah();
			$result_penduduk = $this->model_penduduk->update_data($result_alamat, $this->session->userdata('id'));

			if ($result_penduduk) {
				redirect(base_url('user/'));
			} else {
				redirect(base_url("user/ubah/"));
			}
		} else {
			redirect(base_url("user/"));
		}
	}
	public function ubah_foto()
	{
		$id = $this->input->post('id');
		$foto_lama = $this->input->post('foto_lama');
		$result = $this->penduduk->update_foto($id);
		if ($result) {
			if ($foto_lama != "default.jpg") {
				unlink(FCPATH . 'assets/img/profile/' . $foto_lama);
			}
			$this->session->set_flashdata('success', 'Foto berhasil diperbarui.');
			redirect(base_url("user/"));
		} else {
			$this->session->set_flashdata('error', 'Foto gagal diperbarui.');
			redirect(base_url("user/"));
		}
	}

	public function changePassword()
	{
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			redirect(base_url("user/"));
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				redirect('user/');
			} else {
				if ($current_password == $new_password) {
					redirect('user/');
				} else {
					// password sudah ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('nik', $this->session->userdata('nik'));
					$this->db->update('user');

					redirect('user/');
				}
			}
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
}
