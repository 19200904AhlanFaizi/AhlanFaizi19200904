<?php

class Mahasiswa extends CI_Controller {

    public function index() {
        $this->load->view('view-form-mahasiswa');
    }

    public function cetak() {
        $data = [ 
            'nim' => $this->input->post('nim'), 
            'nama' => $this->input->post('nama'), 
            'alamat' => $this->input->post('alamat'),
            'umur' => $this->input->post('umur')];
        $this->load->view('view-data-mahasiswa', $data);
    }

}