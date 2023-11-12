<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrasiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model jika diperlukan
        $this->load->model('MRegistrasi');
    }

    public function registrasi()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];

        // Gunakan model untuk menyimpan data
        $this->MRegistrasi->save($data);

        // Berikan respons JSON
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode(['success' => true, 'message' => 'Registrasi Berhasil']));
      $this->load->view('registrasi');
   }
}
