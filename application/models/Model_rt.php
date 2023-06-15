<?php

class Model_rt extends CI_Model
{
    public function get_rt()
    {
        return $this->db->get('rt')->result_array();
    }

    public function getRtByKode($kode)
    {
        return $this->db->get_where('rt', ['kode_rt' => $kode])->row_object();
    }

    public function rules()
    {

        $rule = [
            array(
                'field' => 'rt',
                'label' => 'RT',
                'rules' => 'required',
                'errors' => array(
                    'required'      => '%s harus diisi.',
                )
            ),

        ];

        return $rule;
    }
}
