<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
public function index(){
    $this->load->model('Matakuliah_model','matkul1');
    $this->matkul1->nama = 'Komunikasi Efektif';
    $this->matkul1->sks = '2';
    $this->matkul1->kode = 'NF001';

    $this->load->model('Matakuliah_model','matkul2');
    $this->matkul2->nama = 'Dasar-Dasar Pemograman';
    $this->matkul2->sks = '3';
    $this->matkul2->kode = 'TI003';

    $this->load->model('Matakuliah_model','matkul3');
    $this->matkul3->nama = 'Pemograman Web 1';
    $this->matkul3->sks = '3';
    $this->matkul3->kode = 'TI014';

    $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];
    $data['list_matkul'] = $list_matkul;

    $this->load->view('layouts/header');
    $this->load->view('matakuliah/index',$data);
    $this->load->view('layouts/footer');
    }
}