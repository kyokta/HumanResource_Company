<?php

class M_seksi {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData(){
        $query = "SELECT s.id_seksi, s.seksi, s.unit, s.departemen as id_dep, d.departemen from seksi s
                  join departemen d on s.departemen = d.id_departemen";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getDepartemen(){
        $query = "SELECT id_departemen id, departemen FROM departemen;";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function insertData($data){
        $sql = "INSERT INTO seksi (seksi, unit, departemen) VALUES (:seksi, :unit, :departemen)";
        $this->db->query($sql);
        $this->db->bind('seksi', $data['seksi']);
        $this->db->bind('unit', $data['unit']);
        $this->db->bind('departemen', $data['departemen']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getSeksi($id){
        $sql = "SELECT * FROM seksi where id_seksi = $id";
        $this->db->query($sql);
        
        return $this->db->single();
    }

    public function updateSeksi($data){
        $id = $data['id'];
        $seksi = $data['seksi'];
        $unit = $data['unit'];
        $departemen = $data['departemen'];
        $sql = "UPDATE seksi
                SET seksi = '$seksi',
                    unit = '$unit',
                    departemen = '$departemen'
                WHERE id_seksi = $id";
        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteSeksi($id){
        $sql = "DELETE FROM seksi where id_seksi = $id";

        $this->db->query($sql);
        $this->db->execute();
    }
}