<?php

class M_pekerja
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;

        $view = "CREATE or replace view detail_pekerja as
                 SELECT p.id_pegawai, p.nama_lengkap, p.tempat_lahir, DATE_FORMAT(p.tanggal_lahir, '%d %M %Y') tanggal_lahir, p.alamat, p.npwp, sk.seksi, sk.unit, sk.departemen, j.jabatan, g.golongan, p2.pekerjaan 
                 from pribadi p
                 join (select s.id_seksi, s.seksi, s.unit, d.departemen from seksi s 
                       join departemen d on d.id_departemen = s.departemen) as  sk on sk.id_seksi = p.seksi  
                 join jabatan j ON j.id_jabatan = p.jabatan 
                 join golongan g on g.id_golongan = p.golongan 
                 join pekerjaan p2 on p2.id_pekerjaan = p.pekerjaan
                 where p.status = 1";

        $trigger = "CREATE OR REPLACE TRIGGER insertPegawaiBaru
                    AFTER INSERT ON pribadi
                    FOR EACH ROW
                    BEGIN
                        INSERT INTO history_log (tanggal, aksi, data_sesudah, data_sebelum, tabel)
                        VALUES (NOW(), 'tambah pegawai baru', NEW.id_pegawai, NULL, 'pribadi');
                    END";

        $fungsi = "CREATE OR REPLACE FUNCTION getLastId(kode CHARACTER)
                   RETURNS VARCHAR(5)
                   BEGIN
                       DECLARE id VARCHAR(5);
                       SELECT id_pegawai INTO id FROM pribadi p
                       WHERE LEFT(id_pegawai, 1) = kode
                       ORDER BY id_pegawai DESC LIMIT 1;
                       RETURN id;
                   END";

        $this->db->getDB()->exec($view);
        $this->db->getDB()->exec($trigger);
        $this->db->getDB()->exec($fungsi);
    }

    public function ambildata()
    {
        $this->db->query("SELECT p.id_pegawai, p.nama_lengkap, s.seksi
                          FROM pribadi p
                          JOIN seksi s on p.seksi = s.id_seksi
                          WHERE p.status = 1;");
        return $this->db->resultSet();
    }

    public function detailPekerja($id)
    {
        $this->db->query("SELECT *
                          FROM pribadi p
                          WHERE id_pegawai=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getSeksi()
    {
        $this->db->query("SELECT id_seksi as id, seksi FROM seksi;");
        return $this->db->resultSet();
    }

    public function getJabatan()
    {
        $this->db->query("SELECT id_jabatan as id, concat(kd_jabatan, ' - ', jabatan) as jabatan from jabatan j ");
        return $this->db->resultSet();
    }

    public function getGolongan()
    {
        $this->db->query("SELECT id_golongan id, golongan from golongan");
        return $this->db->resultSet();
    }

    public function getPekerjaan()
    {
        $this->db->query("SELECT id_pekerjaan id, pekerjaan from pekerjaan");
        return $this->db->resultSet();
    }

    public function getKodeJabatan($id)
    {
        $this->db->query("SELECT kd_jabatan
                          from jabatan j
                          where id_jabatan = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getLastId($id)
    {
        $sql = "select getLastId('$id') as lastId;";
        $this->db->query($sql);
        return $this->db->single();
    }

    public function insertData($data)
    {
        $sql = "INSERT INTO pribadi
                VALUES (:id, :nama, :temp_lahir, :tgl_lahir, :alamat, :npwp, :seksi, :jabatan, :golongan, :pekerjaan, :stat);";

        $this->db->query($sql);
        $this->db->bind('id', $data['id_pegawai']);
        $this->db->bind('nama', $data['nama_lengkap']);
        $this->db->bind('temp_lahir', $data['tmp_lahir']);
        $this->db->bind('tgl_lahir', $data['tgl_lahir']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('npwp', $data['npwp']);
        $this->db->bind('seksi', $data['seksi']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('golongan', $data['golongan']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('stat', $data['status']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletepekerja($id)
    {
        $this->db->query("UPDATE pribadi SET status = false where id_pegawai = '$id'");
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getDetail($id)
    {
        $sql = "SELECT * from detail_pekerja
                where id_pegawai = '$id'";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function updatePekerja($data, $id)
    {
        $sql = "UPDATE pribadi set $data where id_pegawai = '$id'";
        $this->db->query($sql);
        $this->db->execute();
    }
}
