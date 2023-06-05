<?php

class M_pekerja{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function ambildata(){
        $this->db->query("SELECT p.id_pegawai, p.nama_lengkap, s.seksi
                          FROM pribadi p
                          JOIN seksi s on p.seksi = s.id_seksi;");
        return $this->db->resultSet();
    }

    public function detailpekerja($id){
        $this->db->query("SELECT *
                          FROM pribadi p
                          WHERE id_pegawai=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}