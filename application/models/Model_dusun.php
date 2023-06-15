
<?php 

class Model_dusun extends CI_Model{
    public function get_dusun()
    {
        return $this->db->get('dusun')->result_array();
    }
    public function rules()
    {
       
        $rule =[
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
?>