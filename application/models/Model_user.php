<?php
class Model_user extends CI_Model
{
    public function rules()
    {
        $rule = [
            array(
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),

        ];

        return $rule;
    }

    public function getUserByNik($nik)
    {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->join("penduduk", "user.nik  = penduduk.nik");
        $this->db->join("alamat", "penduduk.kode_alamat  = alamat.kode_alamat");
        $this->db->where(['user.nik' => $nik]);
        return $this->db->get()->row_array();
    }

    public function buat()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'password' => password_hash($this->input->post('tanggal_lahir'), PASSWORD_DEFAULT),
            'role' => 'penduduk'
        ];
        $this->db->insert('user', $data);
    }

    public function cek()
    {
        $nik = $this->input->post('nik', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->db->get_where('user', ["nik" => $nik])->row_object();

        if ($user) {
            if (password_verify($password, $user->password)) {
                return true;
            } else {
                return "Password salah";
            }
        } else {
            return "NIK tidak terdaftar";
        }
    }
}
