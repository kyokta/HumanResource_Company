<?php

class M_golongan {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData(){
        $query = "SELECT * FROM golongan";
        $this->db->query($query);
        return $this->db->resultSet();
    }

}