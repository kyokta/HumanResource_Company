<?php

class Pekerjaan extends Controller
{
    public function index()
    {
        $data['pekerjaan'] = $this->model('M_pekerjaan')->getData();

        $this->view('templates/header');
        $this->view('pekerjaan/index', $data);
        $this->view('templates/footer');
    }

    public function tambahPekerjaan()
    {
        if ($this->model('M_pekerjaan')->tambahPekerjaan($_POST['pekerjaan']) > 0) {
            header('Location: ' . BASEURL . '/Pekerjaan/index');
            exit;
        }
    }

    public function detailPekerjaan(){
        $id = $_POST['id_pekerjaan'];

        $detail = $this->model('M_pekerjaan')->detailPekerjaan($id);
        echo json_encode($detail);
    }

    public function updatePekerjaan()
    {
        $data = $_POST;

        if ($this->model('M_pekerjaan')->updatePekerjaan($data) > 0) {
            header('Location: ' . BASEURL . '/Pekerjaan/index');
            exit;
        }
    }

    public function deletePekerjaan(){
        $id = $_POST['id_pekerjaan'];

        try {
            $this->model('M_pekerjaan')->deletePekerjaan($id);
            echo json_encode(100);
        } catch (Exception $e){
            echo json_encode(200);
        }
    }
}