<?php 
class Model_kelahiran extends CI_Model
{
    // public $id_kelahiran;
    public function simpan()
    {
        $id_kelahiran = time();
        $data=[
            'id_kelahiran' => $id_kelahiran,
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'hari_kelahiran' => strtotime($this->input->post('tanggal_lahir')),
            'tanggal_kelahiran' => $this->input->post('tanggal_lahir'),
            'tempat_kelahiran' => $this->input->post('tempat_lahir'),
        ];
        $this->db->insert('kelahiran', $data);
        return $id_kelahiran;
    }

    public function hapus($id)
    {
        $this->db->delete('kelahiran',['id_kelahiran'=> $id]);
    }

    public function rules()
    {
       
        $rule =[
            array(
                    'field' => 'tempat_lahir',
                    'label' => 'Tempat Lahir',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ),
            array(
                    'field' => 'tanggal_lahir',
                    'label' => 'Tangal Lahir',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ),
            array(
                    'field' => 'nama_ayah',
                    'label' => 'Nama Ayah',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ),
            array(
                    'field' => 'nama_ibu',
                    'label' => 'Nama Ibu',
                    'rules' => 'required',
                    'errors' => array(
                        'required'      => '%s harus diisi.',
                    )
            ),
           
        ];

        return $rule;

    }
    public function getKelahiran_where($id_kelahiran)
    {
        return $this->db->get_where('kelahiran',["id_kelahiran"=> $id_kelahiran])->row_object();
    }
}
?>