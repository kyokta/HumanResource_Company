<?php

class M_seksi {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData(){
        $query = "select s.id_seksi, s.seksi, s.unit, d.departemen from seksi s
        join departemen d on s.departemen = d.id_departemen";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getDepartemen(){
        $query = "SELECT * FROM departemen;";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}