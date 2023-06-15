<?php 
class Model_kematian extends CI_Model
{
    public function get_kematian($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('kematian');
        $this->db->join('penduduk', 'kematian.nik = penduduk.nik');
        $this->db->join('alamat', 'penduduk.kode_alamat = alamat.kode_alamat');
        $this->db->join('dusun', 'alamat.kode_dusun = dusun.kode_dusun');
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }

    public function getKematianById($id)
    {
        # code...
        $this->db->select('*');
        $this->db->from('kematian');
        $this->db->join('penduduk', 'kematian.nik = penduduk.nik');
        $this->db->join('alamat', 'penduduk.kode_alamat = alamat.kode_alamat');
        $this->db->join('dusun', 'alamat.kode_dusun = dusun.kode_dusun');
        $this->db->where(["id_kematian"=>$id]);
        return $this->db->get()->row_object();
    }
    public function hitung()
    {
        return $this->db->get('kematian')->num_rows();
    }
    public function rules()
    {
       
        $rule =[
            array(
                    'field' => 'tempat_meninggal',
                    'label' => 'Tempat meninggal',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ), 
            array(
                    'field' => 'tanggal_meninggal',
                    'label' => 'Tanggal meninggal',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ), 
            array(
                    'field' => 'penyebab_meninggal',
                    'label' => 'Penyebab meninggal',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ), 
           
        ];

        return $rule;

    }


    public function simpan()
    {
        $data=[
            "nik" =>$this->input->post('nik'),
            "penyebab_meninggal" =>$this->input->post('penyebab_meninggal'),
            "tempat_meninggal" =>$this->input->post('tempat_meninggal'),
            "tanggal_meninggal" =>$this->input->post('tanggal_meninggal'),
            "umur" =>$this->input->post('umur'),
        ];
        
        return $this->db->insert('kematian', $data);
    }
}
?>