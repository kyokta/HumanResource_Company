<?php

class M_gaji {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData(){
        $sql = "SELECT g.id_pegawai, p.nama_lengkap nama, count(g.jumlah) jumlah  from gaji g
                join pribadi p on p.id_pegawai = g.id_pegawai
                group by p.id_pegawai";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getNama(){
        $sql = "SELECT id_pegawai, concat(id_pegawai, ' - ', nama_lengkap) nama  from pribadi";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function tambahGaji($data){
        $id = $data['pekerja'];
        $gaji = $data['gaji'];
        $bulan = $data['bulan'];
        $tahun = $data['tahun'];
        $status = true;

        $sql = "INSERT INTO gaji values ('$id', :gaji, :bulan, :tahun, $status)";
        $this->db->query($sql);
        $this->db->bind('gaji', $gaji);
        $this->db->bind('bulan', $bulan);
        $this->db->bind('tahun', $tahun);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function detailGaji($id){
        $sql = "SELECT ROW_NUMBER() OVER (ORDER BY g.id_pegawai) AS nomor, g.bulan, g.tahun, g.jumlah from gaji g 
                join pribadi p on p.id_pegawai = g.id_pegawai
                where g.id_pegawai = '$id'";
        
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getIdentitas($id){
        $sql = "select id_pegawai, nama_lengkap from pribadi p where id_pegawai = '$id'";

        $this->db->query($sql);
        return $this->db->single();
    }
}