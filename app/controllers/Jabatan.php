<?php

class Jabatan extends Controller {
    public function index(){
        $data['jabatan'] = $this->model('M_jabatan')->getJabatan();
        $this->view('templates/header');
        $this->view('jabatan/index', $data);
        $this->view('templates/footer');
    }
}