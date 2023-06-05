<?php

class Pekerja extends Controller{
    public function index()
    {
        $data['title'] = "DATA PRIBADI";
        $data['pekerja'] = $this->model('M_pekerja')->ambildata();
        $this->view('templates/header', $data);
        $this->view('pekerja/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['pekerja'] = $this->model('M_pekerja')->detailpekerja($id);
        $this->view('templates/header');
        $this->view('pekerja/detail-pekerja', $data);
        $this->view('templates/footer');
    }
    
    public function tambah(){
        $this->view('templates/header');
        $this->view('pekerja/tambah-pekerja');
        $this->view('templates/footer');
    }

    public function tambahpekerja(){
        $data = $_POST;
        var_dump($data);
    }
}