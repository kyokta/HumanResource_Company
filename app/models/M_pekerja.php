<?php

class M_pekerja
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function ambildata()
    {
        $this->db->query("SELECT p.id_pegawai, p.nama_lengkap, s.seksi
                          FROM pribadi p
                          JOIN seksi s on p.seksi = s.id_seksi
                          WHERE p.status = 1;");
        return $this->db->resultSet();
    }

    public function detailpekerja($id)
    {
        $this->db->query("SELECT *
                          FROM pribadi p
                          WHERE id_pegawai=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getSeksi()
    {
        $this->db->query("SELECT id_seksi as id, seksi FROM seksi;");
        return $this->db->resultSet();
    }

    public function getJabatan()
    {
        $this->db->query("SELECT id_jabatan as id, concat(kd_jabatan, ' - ', jabatan) as jabatan from jabatan j ");
        return $this->db->resultSet();
    }

    public function getGolongan()
    {
        $this->db->query("SELECT id_golongan id, golongan from golongan");
        return $this->db->resultSet();
    }

    public function getPekerjaan()
    {
        $this->db->query("SELECT id_pekerjaan id, pekerjaan from pekerjaan");
        return $this->db->resultSet();
    }

    public function getKodeJabatan($id)
    {
        $this->db->query("SELECT kd_jabatan
                          from jabatan j
                          where id_jabatan = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getLastId($id)
    {
        $sql = "select id_pegawai from pribadi p
        where left(id_pegawai, 1) = '$id'
        order by id_pegawai desc limit 1";
        $this->db->query($sql);
        return $this->db->single();
    }

    public function insertData($data)
    {
        $sql = "INSERT INTO pribadi
                VALUES (:id, :nama, :temp_lahir, :tgl_lahir, :alamat, :npwp, :seksi, :jabatan, :golongan, :pekerjaan, :stat);";

        $this->db->query($sql);
        $this->db->bind('id', $data['id_pegawai']);
        $this->db->bind('nama', $data['nama_lengkap']);
        $this->db->bind('temp_lahir', $data['tmp_lahir']);
        $this->db->bind('tgl_lahir', $data['tgl_lahir']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('npwp', $data['npwp']);
        $this->db->bind('seksi', $data['seksi']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('golongan', $data['golongan']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('stat', $data['status']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletepekerja($id)
    {
        $this->db->query("UPDATE pribadi SET status = false where id_pegawai = '$id'");
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getDetail($id){
        $sql = "SELECT p.id_pegawai, p.nama_lengkap, p.tempat_lahir, DATE_FORMAT(p.tanggal_lahir, '%d %M %Y') tanggal_lahir, p.alamat, p.npwp, sk.seksi, sk.unit, sk.departemen, j.jabatan, g.golongan, p2.pekerjaan 
                from pribadi p
                join (select s.id_seksi, s.seksi, s.unit, d.departemen from seksi s 
                      join departemen d on d.id_departemen = s.id_seksi) as  sk on sk.id_seksi = p.seksi  
                join jabatan j ON j.id_jabatan = p.jabatan 
                join golongan g on g.id_golongan = p.golongan 
                join pekerjaan p2 on p2.id_pekerjaan = p.pekerjaan
                where p.id_pegawai = '$id'";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
