<?php

class Pekerja extends Controller
{
    public function index()
    {
        $data['title'] = "DATA PRIBADI";
        $data['pekerja'] = $this->model('M_pekerja')->ambildata();
        $this->view('templates/header', $data);
        $this->view('pekerja/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['seksi'] = $this->model('M_pekerja')->getSeksi();
        $data['jabatan'] = $this->model('M_pekerja')->getJabatan();
        $data['golongan'] = $this->model('M_pekerja')->getGolongan();
        $data['pekerjaan'] = $this->model('M_pekerja')->getPekerjaan();

        $data['pekerja'] = $this->model('M_pekerja')->detailpekerja($id);

        $this->view('templates/header');
        $this->view('pekerja/detail-pekerja', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['seksi'] = $this->model('M_pekerja')->getSeksi();
        $data['jabatan'] = $this->model('M_pekerja')->getJabatan();
        $data['golongan'] = $this->model('M_pekerja')->getGolongan();
        $data['pekerjaan'] = $this->model('M_pekerja')->getPekerjaan();

        $this->view('templates/header');
        $this->view('pekerja/tambah-pekerja', $data);
        $this->view('templates/footer');
    }

    public function tambahpekerja()
    {
        $data = $_POST;
        $kode_jabatan = $this->model('M_pekerja')->getKodeJabatan($data['jabatan'])['kd_jabatan'];
        $last_id = $this->model('M_pekerja')->getLastId($kode_jabatan);

        if ($last_id) {
            $lastnum = substr($last_id['id_pegawai'], 1, 4);
            $new_id = $kode_jabatan . strval($lastnum + 1);
        } else {
            $new_id = $kode_jabatan . '0001';
        }

        $data['id_pegawai'] = $new_id;
        $data['status'] = true;

        if ($this->model('M_pekerja')->insertData($data) > 0) {
            header('Location: ' . BASEURL . '/Pekerja/index');
            exit;
        }
    }

    public function deletepekerja()
    {
        $id = $_POST['id_pekerja'];

        if ($this->model('M_pekerja')->deletepekerja($id) > 0) {
            echo json_encode(100);
        } else {
            echo json_encode(200);
        }
    }

    public function getDetail()
    {
        $id = $_POST['id_pekerja'];

        $detail = $this->model('M_pekerja')->getDetail($id);
        echo json_encode($detail);
    }

    public function updatepekerja()
    {
        $data = $_POST;
        $id = $data['id_pegawai'];

        $old_data = $this->model('M_pekerja')->detailpekerja($id);
        $compare = array_diff($data, $old_data);

        $column = "";
        foreach ($compare as $col => $val) {
            $column .= $col . " = " . "'$val', ";
        }
        $trimmed = rtrim($column, ', ');

        if ($this->model('M_pekerja')->updatepekerja($trimmed, $id) > 0) {
            header('Location: ' . BASEURL . '/Pekerja/index');
            exit;
        }
    }
}
