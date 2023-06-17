<?php

class Cuti extends Controller
{
    public function index()
    {
        $data['cuti'] = $this->model('M_cuti')->getData();
        $data['pekerja'] = $this->model('M_cuti')->getNama();

        $this->view('templates/header');
        $this->view('cuti/index', $data);
        $this->view('templates/footer');
    }

    public function tambahCuti()
    {
        if ($this->model('M_cuti')->tambahCuti($_POST) > 0) {
            header('Location: ' . BASEURL . '/Cuti/index');
            exit;
        }
    }

    public function detailCuti($id)
    {
        $data['cuti'] = $this->model('M_cuti')->detailCuti($id);
        $data['id'] = $this->model('M_cuti')->getIdentitas($id)['id_pegawai'];
        $data['nama'] = $this->model('M_cuti')->getIdentitas($id)['nama_lengkap'];

        $this->view('templates/header');
        $this->view('cuti/detail-cuti', $data);
        $this->view('templates/footer');
    }
}
