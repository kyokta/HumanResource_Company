<?php

class Seksi extends Controller
{
    public function index()
    {
        $data['seksi'] = $this->model('M_seksi')->getData();
        $data['departemen'] = $this->model('M_seksi')->getDepartemen();
        $this->view('templates/header');
        $this->view('seksi/index', $data);
        $this->view('templates/footer');
    }

    public function tambahSeksi()
    {
        $data = $_POST;

        if ($this->model('M_seksi')->insertData($data) > 0) {
            header('Location: ' . BASEURL . '/Seksi/index');
            exit;
        }
    }

    public function editSeksi()
    {
        $data = $_POST['id_seksi'];

        $detail = $this->model('M_seksi')->getSeksi($data);
        echo json_encode($detail);
    }

    public function updateSeksi()
    {
        $data = $_POST;

        if ($this->model('M_seksi')->updateSeksi($data) > 0) {
            header('Location: ' . BASEURL . '/Seksi/index');
            exit;
        }
    }

    public function deleteSeksi()
    {
        $id = $_POST['id_seksi'];

        try {
            $this->model('M_seksi')->deleteSeksi($id);
            echo json_encode(100);
        } catch (Exception $e){
            echo json_encode(200);
        }
    }
}
