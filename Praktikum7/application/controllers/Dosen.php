<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
public function index(){
    $this->load->model('Dosen_model','dsn1');
    $this->dsn1->nidn = '057689275';
    $this->dsn1->pendidikan = 'S3 Psikolog';

    $this->load->model('Dosen_model','dsn2');
    $this->dsn2->nidn = '057689567';
    $this->dsn2->pendidikan = 'S2 Ilmu Komputer';

    $this->load->model('Dosen_model','dsn3');
    $this->dsn3->nidn = '057625472';
    $this->dsn3->pendidikan = 'S3 Ilmu Komputer';

    $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
    $data['list_dsn'] = $list_dsn;

    $this->load->view('layouts/header');
    $this->load->view('dosen/index',$data);
    $this->load->view('layouts/footer');
    }
}