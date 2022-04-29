<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    public function index(){
        $this->load->model('Mahasiswa_model');
        $mahasiswa = $this->Mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layouts/footer');
    }

    public function detail($id){
        $this->load->model('Mahasiswa_model');
        $siswa = $this->Mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('layouts/footer');
    }
}