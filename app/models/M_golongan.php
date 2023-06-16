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

    public function tambahGolongan($golongan){
        $sql = "INSERT INTO golongan(golongan) values (:golongan)";

        $this->db->query($sql);
        $this->db->bind('golongan', $golongan);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function detailGolongan($id){
        $sql = "SELECT * FROM golongan where id_golongan = $id";

        $this->db->query($sql);
        return $this->db->single();
    }

    public function updateGolongan($data){
        $id = $data['id_golongan'];
        $golongan = $data['golongan'];

        $sql = "UPDATE golongan
                SET golongan = '$golongan'
                WHERE id_golongan = $id";
        
        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteGolongan($id){
        $sql = "DELETE FROM golongan where id_golongan = $id";

        $this->db->query($sql);
        $this->db->execute();
    }
}