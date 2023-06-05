<?php

class Pekerjaan extends Controller {
    public function index(){
        $this->view('templates/header');
        $this->view('pekerjaan/index');
        $this->view('templates/footer');
    }
}