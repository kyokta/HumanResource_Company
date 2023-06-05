<?php

class Seksi extends Controller {
    public function index(){
        $data['seksi'] = $this->model('M_seksi')->getData();
        $data['departemen'] = $this->model('M_seksi')->getDepartemen();
        $this->view('templates/header');
        $this->view('seksi/index', $data);
        $this->view('templates/footer');
    }

    public function getDepartemen(){
        $departemen = $this->model('M_seksi')->getDepartemen();
        echo json_encode($departemen);
    }

    public function tambahSeksi(){
        $data = $_POST;
        var_dump($data);
    }
}