<?php 
class Model_alamat extends CI_Model
{
    public $kode;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_rt','rt');
        $this->load->model('model_rw','rw');
        
    }
    public function tambah()
    {
        
        $no_rumah = $this->input->post('no_rumah');
        $rt = $this->rt->getRtByKode($this->input->post('rt')); 
        $rw = $this->rw->getRwByKode($this->input->post('rw')); 
        $dusun = $this->input->post('dusun');

        // set kode alamat
        $this->kode = $dusun.$rt->no_rt.$rw->no_rw.$no_rumah;
        
        // cek kode didalam table alamat
        if($this->cek_kode() == 0){
            // jika ada, siapkan data
            $data=[
                'kode_alamat' => $this->kode,
                'no_rumah' => $no_rumah,
                'kode_rt' => $this->input->post('rt'),
                'kode_rw' => $this->input->post('rw'),
                'kode_dusun' => $dusun
            ];
            // simpan data ke table alamat
            $this->db->insert('alamat', $data);

            // return kode alamat
            return $this->kode;
        } else{
            return $this->kode;
        }


    }

    public function cek_kode()
    {
        return $this->db->get_where('alamat',["kode_alamat"=> $this->kode])->num_rows();
        
    }

    public function getAlamatByKode($kode_alamat)
    {
        $this->db->select('*');
        $this->db->from('alamat');
        $this->db->join('dusun','alamat.kode_dusun=dusun.kode_dusun');
        $this->db->where(["kode_alamat" => $kode_alamat]);
        return $this->db->get()->row_object();
    }

    public function rules()
    {
       
        $rule =[
            array(
                    'field' => 'no_rumah',
                    'label' => 'No.Rumah',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ), 
            array(
                    'field' => 'rt',
                    'label' => 'RT',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ), 
            array(
                    'field' => 'rw',
                    'label' => 'RW',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ), 
            array(
                    'field' => 'dusun',
                    'label' => 'Dusun',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ), 
           
        ];

        return $rule;

    }
}
