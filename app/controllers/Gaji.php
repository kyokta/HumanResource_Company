<?php

class Gaji extends Controller
{
    public function index()
    {
        $data['gaji'] = $this->model('M_gaji')->getData();
        $data['pekerja'] = $this->model('M_gaji')->getNama();

        $this->view('templates/header');
        $this->view('gaji/index', $data);
        $this->view('templates/footer');
    }

    public function tambahGaji()
    {
        if ($this->model('M_gaji')->tambahGaji($_POST) > 0) {
            header('Location: ' . BASEURL . '/Gaji/index');
            exit;
        }
    }

    public function detailGaji($id)
    {
        $data['gaji'] = $this->model('M_gaji')->detailGaji($id);
        $data['id'] = $this->model('M_gaji')->getIdentitas($id)['id_pegawai'];
        $data['nama'] = $this->model('M_gaji')->getIdentitas($id)['nama_lengkap'];

        $this->view('templates/header');
        $this->view('gaji/detail-gaji', $data);
        $this->view('templates/footer');
    }
}
