<?php

class Model_penduduk extends CI_Model
{
    public $nik;
    public $role;
    public function __construct()
    {
        parent::__construct();
        $this->role = $this->session->userdata('role');
    }

    public function tambah($kode_alamat)
    {
        $this->nik = $this->input->post('nik');
        $data = [
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama'),
            'status_perkawinan' => $this->input->post('status_perkawinan'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'pendidikan' => $this->input->post('pendidikan'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'kode_alamat' => $kode_alamat,
            // 'foto' => $this->upload(),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
        ];
        return $this->db->insert('penduduk', $data);
    }
    public function update_data($kode_alamat, $id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama'),
            'status_perkawinan' => $this->input->post('status_perkawinan'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'pendidikan' => $this->input->post('pendidikan'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'kode_alamat' => $kode_alamat,
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
        ];
        return $this->db->update('penduduk', $data, "id = $id");;
    }
    public function cek_nik($nik)
    {
        return $this->db->get_where('penduduk', ["nik" => $nik])->num_rows();
    }


    public function get_penduduk($limit, $start)
    {
        $role = $this->session->userdata('role');

        $this->db->select('*');
        $this->db->from('penduduk');
        $this->db->join('alamat', 'penduduk.kode_alamat = alamat.kode_alamat');
        $this->db->join('dusun', 'alamat.kode_dusun = dusun.kode_dusun');

        if ($role != "admin") {
            $kode_rt = $this->session->userdata('kode_rt');
            $this->db->where(["alamat.kode_rt" => $kode_rt]);
        }
        $this->db->limit($limit, $start);
        // $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }

    public function getPendudukByNik($nik)
    {
        $this->db->select('*');
        $this->db->from('penduduk');
        $this->db->join('alamat', 'penduduk.kode_alamat = alamat.kode_alamat');
        $this->db->join('dusun', 'alamat.kode_dusun = dusun.kode_dusun');
        $this->db->where(["nik" => $nik]);
        return $this->db->get()->row_object();
    }

    public function getpendudukByRt($rt)
    {
        $this->db->select('*');
        $this->db->from('penduduk');
        $this->db->join('alamat', 'alamat.kode_alamat = penduduk.kode_alamat');
        $this->db->join('dusun', 'dusun.kode_dusun = alamat.kode_dusun');
        $this->db->where(['kode_rt' => $rt]);
        return $this->db->get()->result_object();
    }

    public function getPendudukById($id)
    {
        $this->db->select('*');
        $this->db->from('penduduk');
        $this->db->join('alamat', 'penduduk.kode_alamat = alamat.kode_alamat');
        $this->db->join('dusun', 'alamat.kode_dusun = dusun.kode_dusun');
        $this->db->where(["id" => $id]);
        return $this->db->get()->row_object();
    }

    public function hitung()
    {
        $this->db->from('penduduk');
        if ($this->role != 'admin') {
            $kode_rt = $this->session->userdata('kode_rt');
            $this->db->join('alamat', 'alamat.kode_alamat = penduduk.kode_alamat');
            $this->db->where(['kode_rt' => $kode_rt]);
        }
        return $this->db->get()->num_rows();
    }

    public function meninggal($nik)
    {
        $data = [
            "status_keberadaan" => "meninggal"
        ];
        return $this->db->update('penduduk', $data, "nik = $nik");
    }
    public function update_foto($id)
    {
        $new_foto = $this->upload();
        $data = [
            "foto" => $new_foto
        ];
        return $this->db->update('penduduk', $data, "id = $id");
    }

    public function upload()
    {
        $config['upload_path']          = './assets/img/profile/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 2048;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload("foto")) {
            return "default.jpg";
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }

    public function hapus($id)
    {
        $this->db->delete('penduduk', ['id' => $id]);
    }

    public function rekap_pekerjaan()
    {
        $pekerjaan = ['belum bekerja', 'petani', 'buruh', 'wiraswasta', 'pns', 'tni', 'polri'];
        foreach ($pekerjaan as $p) {
            $this->db->from('penduduk');
            if ($this->role != 'admin') {
                $kode_rt = $this->session->userdata('kode_rt');
                $this->db->join('alamat', 'alamat.kode_alamat=penduduk.kode_alamat');
                $this->db->where(['kode_rt' => $kode_rt]);
            }
            $this->db->where(['pekerjaan' => $p]);
            $result = $this->db->get()->num_rows();
            $data["$p"] = $result;
        }
        return $data;
    }
    public function rekap_pendidikan()
    {
        $pendidikan = ["Tamat SD/Sederajat", "Tamat SLTP/Sederajat", "Tamat SLTA/Sederajat", "D3/Sederajat", "S1/Sederajat", "S2/Sederajat", "S3/Sederajat"];
        foreach ($pendidikan as $p) {
            $this->db->from('penduduk');
            if ($this->role != 'admin') {
                $kode_rt = $this->session->userdata('kode_rt');
                $this->db->join('alamat', 'alamat.kode_alamat=penduduk.kode_alamat');
                $this->db->where(['kode_rt' => $kode_rt]);
            }
            $this->db->where(['pendidikan' => $p]);
            $result = $this->db->get()->num_rows();
            $data["$p"] = $result;
        }
        return $data;
    }


    public function rules()
    {
        $rule = [
            array(
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'required|min_length[16]|max_length[16]',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'tempat_lahir',
                'label' => 'Tempat lahir',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'tanggal_lahir',
                'label' => 'Tanggal lahir',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'status_perkawinan',
                'label' => 'Status Perkawinan',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'kelamin',
                'label' => 'Kelamin',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'pendidikan',
                'label' => 'Pendidikan',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'nama_ayah',
                'label' => 'Nama ayah',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'nama_ibu',
                'label' => 'Nama ibu',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            // array(
            //         'field' => 'foto',
            //         'label' => 'Foto',
            //         'rules' => 'required',
            //         'errors' => array(
            //             'required'      => '%s harus diisi.',
            //         )
            // ),
        ];

        return $rule;
    }
}
