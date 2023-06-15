<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_penduduk', 'penduduk');
		$this->load->model('model_surat', 'surat');
		$this->load->model('model_tamu', 'tamu');
		if ($this->session->userdata('role') == 'penduduk') {
			redirect(base_url('user'));
		}
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['pekerjaan'] = $this->penduduk->rekap_pekerjaan();
		$data['pendidikan'] = $this->penduduk->rekap_pendidikan();
		$data['jml_penduduk'] = $this->penduduk->hitung();
		$data['jml_surat_terbuat'] = $this->surat->hitung_surat_terbuat();
		$data['jml_tamu'] = $this->tamu->hitung();
		$this->load->view('template/header.php', $data);
		$this->load->view('template/sidebar.php');
		$this->load->view('ketua_rt/index.php', $data);
		$this->load->view('template/footer.php');
	}

	public function changePassword()
	{
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			redirect(base_url("admin/"));
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				redirect('admin/');
			} else {
				if ($current_password == $new_password) {
					redirect('admin/');
				} else {
					// password sudah ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('nik', $this->session->userdata('nik'));
					$this->db->update('user');

					redirect('admin/');
				}
			}
		}
	}
}
