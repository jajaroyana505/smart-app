<?php

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class Penduduk extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_penduduk', 'penduduk');
    }

    public function index_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $data = $this->penduduk->getAll();
        } else {
            // $data = $this->penduduk->getkontak($id);
        }
        $this->response([
            'status' => TRUE,
            'message' => 'No users were found',
            'data' => $data
        ], REST_Controller::HTTP_OK); // OK
        if ($data == null) {
            $this->response([
                'status' => FALSE,
                'message' => 'data tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
