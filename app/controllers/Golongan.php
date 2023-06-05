<?php

class Golongan extends Controller{
    public function index(){
        $data['golongan'] = $this->model('M_golongan')->getData();
        $this->view('templates/header');
        $this->view('golongan/index', $data);
        $this->view('templates/footer');
    }
}