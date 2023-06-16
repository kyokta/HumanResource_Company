<?php

class Jabatan extends Controller {
    public function index(){
        $data['jabatan'] = $this->model('M_jabatan')->getJabatan();
        $this->view('templates/header');
        $this->view('jabatan/index', $data);
        $this->view('templates/footer');
    }

    public function tambahjabatan(){
        if ($this->model('M_jabatan')->insertData($_POST) > 0){
            header('Location: '. BASEURL . '/Jabatan/index');
            exit;
        }
    }
}