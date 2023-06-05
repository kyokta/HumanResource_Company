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
}