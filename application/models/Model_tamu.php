<?php
class Model_tamu extends CI_Model
{
    public function rules()
    {
        $rule = [
            array(
                'field' => 'nama',
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'kel_tujuan',
                'label' => 'Keluarga Tujuan',
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
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),


        ];

        return $rule;
    }

    public function get_tamu()
    {
        $role = $this->session->userdata('role');
        if ($role == "admin") {
            return $this->db->get('tamu')->result_object();
        } else {
            $kode_rt = $this->session->userdata('kode_rt');
            $this->db->where(['kode_rt' => $kode_rt]);
            return $this->db->get_where('tamu', ['kode_rt' => $kode_rt])->result_object();
        }
    }

    public function tambah()
    {
        $kode_rt = $this->session->userdata('kode_rt');
        $this->db->where(['kode_rt' => $kode_rt]);
        $data = [
            "nama" => $this->input->post('nama'),
            "tanggal" => date('Y-m-d', time()),
            "keperluan" => $this->input->post('keperluan'),
            "ktp" => $this->upload(),
            "alamat" => $this->input->post('alamat'),
            "keluarga_tujuan" => $this->input->post('kel_tujuan'),
            "kode_rt" => $kode_rt,
        ];
        return $this->db->insert('tamu', $data);
    }

    public function hitung()
    {
        $role = $this->session->userdata('role');
        if ($role == "admin") {
            return $this->db->get('tamu')->num_rows();
        } else {
            $kode_rt = $this->session->userdata('kode_rt');
            $this->db->where(['kode_rt' => $kode_rt]);
            return $this->db->get_where('tamu', ['kode_rt' => $kode_rt])->num_rows();
        }
    }

    public function upload()
    {
        $config['upload_path']          = './assets/img/ktp/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 2048;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload("ktp")) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }
}
