<?php

class Golongan extends Controller
{
    public function index()
    {
        $data['golongan'] = $this->model('M_golongan')->getData();
        $this->view('templates/header');
        $this->view('golongan/index', $data);
        $this->view('templates/footer');
    }

    public function tambahGolongan()
    {
        if ($this->model('M_golongan')->tambahGolongan($_POST['golongan']) > 0) {
            header('Location: ' . BASEURL . '/Golongan/index');
            exit;
        }
    }

    public function detailGolongan(){
        $id = $_POST['id_golongan'];

        $detail = $this->model('M_golongan')->detailGolongan($id);
        echo json_encode($detail);
    }

    public function updateGolongan()
    {
        $data = $_POST;

        if ($this->model('M_golongan')->updateGolongan($data) > 0) {
            header('Location: ' . BASEURL . '/Golongan/index');
            exit;
        }
    }

    public function deleteGolongan(){
        $id = $_POST['id_golongan'];

        try {
            $this->model('M_golongan')->deleteGolongan($id);
            echo json_encode(100);
        } catch (Exception $e){
            echo json_encode(200);
        }
    }
}
