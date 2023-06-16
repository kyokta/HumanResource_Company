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
        $sql = "INSERT INTO jabatan(jabatan) values (:jabatan)";

        $this->db->query($sql);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function detailJabatan(){
        $data = $_POST;

        print_r($data);
    }
}