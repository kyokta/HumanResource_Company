<?php

class Jabatan extends Controller
{
    public function index()
    {
        $data['jabatan'] = $this->model('M_jabatan')->getJabatan();
        $this->view('templates/header');
        $this->view('jabatan/index', $data);
        $this->view('templates/footer');
    }

    public function tambahjabatan()
    {
        if ($this->model('M_jabatan')->insertData($_POST) > 0) {
            header('Location: ' . BASEURL . '/Jabatan/index');
            exit;
        }
    }

    public function detailJabatan()
    {
        $id = $_POST['id_jabatan'];

        $detail = $this->model('M_jabatan')->detailJabatan($id);
        echo json_encode($detail);
    }

    public function updateJabatan()
    {
        $data = $_POST;

        if ($this->model('M_jabatan')->updateJabatan($data) > 0) {
            header('Location: ' . BASEURL . '/Jabatan/index');
            exit;
        }
    }

    public function deleteJabatan()
    {
        $id = $_POST['id_jabatan'];

        try {
            $this->model('M_jabatan')->deleteJabatan($id);
            echo json_encode(100);
        } catch (Exception $e){
            echo json_encode(200);
        }
    }
}
