<?php

class M_jabatan {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getJabatan(){
        $query = "SELECT * FROM jabatan";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function insertData($data){
        $sql = "INSERT INTO jabatan(kd_jabatan, jabatan) values (:kode, :jabatan)";

        $this->db->query($sql);
        $this->db->bind('kode', $data['kd_jabatan']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function detailJabatan($id){
        $sql = "SELECT * FROM jabatan where id_jabatan = $id";

        $this->db->query($sql);
        return $this->db->single();
    }

    public function updateJabatan($data){
        $id = $data['id_jabatan'];
        $kode = $data['kd_jabatan'];
        $jabatan = $data['jabatan'];
        
        $sql = "UPDATE jabatan
                SET kd_jabatan = '$kode',
                    jabatan = '$jabatan'
                WHERE id_jabatan = $id";
        
        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteJabatan($id){
        $sql = "DELETE FROM jabatan where id_jabatan = $id";

        $this->db->query($sql);
        $this->db->execute();
    }
}