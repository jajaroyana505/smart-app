<?php 

class Model_rw extends CI_Model{
    public function get_rw()
    {
        return $this->db->get('rw')->result_array();
        
    }
    public function getRwByKode($kode)
    {
        return $this->db->get_where('rw',['kode_rw' => $kode])->row_object();
    }

    public function rules()
    {
       
        $rule =[
            array(
                    'field' => 'rw',
                    'label' => 'RW',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ),
           
        ];

        return $rule;

    }
}
?>