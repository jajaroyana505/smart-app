<?php

class Model_surat extends CI_Model
{

    public $role;

    public function __construct()
    {
        parent::__construct();
        $this->role = $this->session->userdata('role');
    }

    public function get_surat()
    {
        $this->db->select("no_surat,nama,jenis,status");
        $this->db->from("surat");
        $this->db->join("penduduk", "penduduk.nik=surat.nik");
        if ($this->role != "admin") {
            $kode_rt = $this->session->userdata('kode_rt');
            $this->db->join('alamat', 'alamat.kode_alamat=penduduk.kode_alamat');
            $this->db->join('rt', 'rt.kode_rt=alamat.kode_rt');
            $this->db->where(["rt.kode_rt" => $kode_rt]);
        }
        $this->db->where(["status" => 2]);
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(6);
        return $this->db->get()->result_object();
    }
    public function get_suratByNik()
    {
        $nik = $this->session->userdata('nik');
        $this->db->select("no_surat,nama,jenis,status");
        $this->db->from("surat");
        $this->db->join("penduduk", "penduduk.nik=surat.nik");
        $this->db->join('alamat', 'alamat.kode_alamat=penduduk.kode_alamat');
        $this->db->join('rt', 'rt.kode_rt=alamat.kode_rt');
        $this->db->where(["surat.nik" => $nik]);
        return $this->db->get()->result_object();
    }

    public function get_riwayat()
    {
        $this->db->select("*");
        $this->db->from("surat");
        $this->db->join("penduduk", "penduduk.nik=surat.nik");
        $this->db->join('alamat', 'alamat.kode_alamat=penduduk.kode_alamat');
        if ($this->role != "admin") {
            $kode_rt = $this->session->userdata('kode_rt');
            $this->db->join('rt', 'rt.kode_rt=alamat.kode_rt');
            $this->db->where(["rt.kode_rt" => $kode_rt]);
        }
        $this->db->where(["status !=" => 1]);
        $this->db->order_by('tanggal', 'DESC');

        $result = $this->db->get()->result_object();

        $histories = [];

        foreach ($result as $_result) {
            $history = array(
                "jenis_surat" => $_result->jenis,
                "no_surat" => "$_result->no_surat/$_result->jenis/$_result->kode_rt/" . date('m', strtotime($_result->tanggal)) . "/" . date('Y', strtotime($_result->tanggal)),
                "nama" => $_result->nama,
                "jenis" => $_result->jenis,
                "keperluan" => $_result->keperluan,
                "tanggal" => format_tanggal($_result->tanggal),
                "status" => $_result->status

            );
            array_push($histories, $history);
        }

        return $histories;
    }

    public function detail_surat($no_surat)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->join('penduduk', 'penduduk.nik=surat.nik');
        $this->db->join('alamat', 'alamat.kode_alamat=penduduk.kode_alamat');
        $this->db->join('rt', 'rt.kode_rt=alamat.kode_rt');
        $this->db->join('rw', 'rw.kode_rw=alamat.kode_rw');
        $this->db->join('dusun', 'dusun.kode_dusun=alamat.kode_dusun');
        $this->db->where(['no_surat' => $no_surat]);
        $result = $this->db->get()->row_object();

        return [
            "rt" => $result->no_rt,
            "rw" => $result->no_rw,
            "jenis_surat" => $result->jenis,
            "no_surat" => "$result->no_surat/$result->jenis/$result->kode_rt/" . date('m', strtotime($result->tanggal)) . "/" . date('Y', strtotime($result->tanggal)),
            "nik" => $result->nik,
            "nama" => $result->nama,
            "kelamin" => $result->kelamin,
            "ttl" => "$result->tempat_lahir, " . format_tanggal($result->tanggal_lahir),
            "alamat" => "Dusun $result->nama_dusun, $result->kode_rt/$result->kode_rw,",
            "keperluan" => $result->keperluan,
            "tanggal" => format_tanggal($result->tanggal)
        ];
    }

    public function get_pengajuan()
    {
        $this->db->select("no_surat,nama,jenis,tanggal,keperluan");
        $this->db->from("surat");
        $this->db->join("penduduk", "penduduk.nik=surat.nik");
        if ($this->role != "admin") {
            $kode_rt = $this->session->userdata('kode_rt');
            $this->db->join('alamat', 'alamat.kode_alamat=penduduk.kode_alamat');
            $this->db->join('rt', 'rt.kode_rt=alamat.kode_rt');
            $this->db->where(["rt.kode_rt" => $kode_rt]);
        }
        $this->db->where(["status" => 1]);
        $this->db->limit(5);
        return $this->db->get()->result_object();
    }

    public function rules()
    {
        return $rule = [
            array(
                'field' => 'jenis',
                'label' => 'Jenis Surat',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'keperluan',
                'label' => 'Keperluan',
                'rules' => 'required',
                'errors' => array(
                    'required'      => 'Kolom %s harus diisi.',
                )
            ),
        ];
    }
    public function buat()
    {
        $data = [
            "no_surat" => $this->hitung() + 1,
            "nik" => $this->input->post("nik"),
            "jenis" => $this->input->post("jenis"),
            "keperluan" => $this->input->post("keperluan"),
            "tanggal" => date('Y-m-d', time()),
            "status" => 1,
        ];
        return $this->db->insert('surat', $data);
    }

    public function hitung()
    {
        return $this->db->get("surat")->num_rows();
    }
    public function hitung_surat_terbuat()
    {
        $this->db->from('surat');
        if ($this->role != 'admin') {
            $kode_rt = $this->session->userdata('kode_rt');
            $this->db->join('penduduk', 'penduduk.nik = surat.nik');
            $this->db->join('alamat', 'alamat.kode_alamat = penduduk.kode_alamat');
            $this->db->where(['kode_rt' => $kode_rt]);
        }
        $this->db->where(['status' => 2]);
        return $this->db->get()->num_rows();
    }

    public function tolak_pengajuan($no_surat)
    {
        $data = [
            "status" => 0
        ];
        $this->db->where('no_surat', $no_surat);
        return $this->db->update('surat', $data);
    }

    public function terima_pengajuan($no_surat)
    {
        $data = [
            "tanggal" => date('Y-m-d', time()),
            "status" => 2
        ];

        $this->db->where('no_surat', $no_surat);
        return $this->db->update('surat', $data);
    }
}
