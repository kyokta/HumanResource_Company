<?php

class M_cuti
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;

        $view = "CREATE or REPLACE view namaPekerja as
                 SELECT id_pegawai, concat(id_pegawai, ' - ', nama_lengkap) nama  from pribadi where status = true";

        $prosedur = "CREATE OR REPLACE PROCEDURE InsertCuti(
                         IN idpegawai varchar(5),
                         IN tanggalcuti DATE,
                         IN alasan varchar(50)
                     )
                     BEGIN
                         INSERT INTO cuti (id_pekerja, tanggal_cuti, alasan)
                         VALUES (idpegawai, tanggalcuti, alasan);
                     END";

        $this->db->getDB()->exec($view);
        $this->db->getDB()->exec($prosedur);
    }

    public function getData()
    {
        $sql = "SELECT c.id_cuti, c.id_pekerja, p.nama_lengkap, count(c.id_pekerja) jumlah  from cuti c
                join pribadi p on p.id_pegawai = c.id_pekerja 
                where p.status = true
                group by c.id_pekerja";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getNama()
    {
        $sql = "SELECT * from namaPekerja";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function tambahCuti($data)
    {
        $id = $data['pekerja'];
        $tanggal = $data['tanggal_cuti'];
        $alasan = $data['alasan'];

        $sql = "CALL InsertCuti('$id', '$tanggal', '$alasan');";

        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function detailCuti($id)
    {
        $sql = "SELECT * from cuti c where id_pekerja = '$id'";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getIdentitas($id)
    {
        $sql = "SELECT id_pegawai, nama_lengkap from pribadi p where id_pegawai = '$id'";

        $this->db->query($sql);
        return $this->db->single();
    }
}
