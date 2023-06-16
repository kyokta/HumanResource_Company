<?php

class M_pekerjaan {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData(){
        $query = "SELECT * FROM pekerjaan";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahPekerjaan($pekerjaan){
        $sql = "INSERT INTO pekerjaan(pekerjaan) values (:pekerjaan)";

        $this->db->query($sql);
        $this->db->bind('pekerjaan', $pekerjaan);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function detailPekerjaan($id){
        $sql = "SELECT * FROM pekerjaan where id_pekerjaan = $id";

        $this->db->query($sql);
        return $this->db->single();
    }

    public function updatePekerjaan($data){
        $id = $data['id_pekerjaan'];
        $pekerjaan = $data['pekerjaan'];

        $sql = "UPDATE pekerjaan
                SET pekerjaan = '$pekerjaan'
                WHERE id_pekerjaan = $id";
        
        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletePekerjaan($id){
        $sql = "DELETE FROM pekerjaan where id_pekerjaan = $id";

        $this->db->query($sql);
        $this->db->execute();
    }
}