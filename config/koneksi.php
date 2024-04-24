<?php 


// script koneksi ke DB

    class koneksi{
        function __construct(){
            $this->db = new mysqli('localhost','root','','inventaris_pln');
        }
        // query login
        public function login($table,$where){
            $query = $this->db->query("SELECT * FROM $table WHERE $where AND $where");
            $data = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }

        // ----------------------
        // query sql dml
        // ----------------------
        public function sum($kolom,$nama,$tabel){
            $query = $this->db->query("SELECT SUM($kolom) AS $nama FROM $tabel");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }
        public function count($nama,$tabel){
            $query = $this->db->query("SELECT COUNT(*) AS $nama FROM $tabel");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }
        public function deleteData($tabel,$where){
            $query = $this->db->query("DELETE FROM $tabel WHERE $where");
            if($query == true){
                return true;
            }else{
                return false;
            }
        }
        public function updateData($tabel,$kolom,$where){
            $query = $this->db->query("UPDATE $tabel SET $kolom WHERE $where");
            if($query == true){
                return true;
            }else{
                return false;
            }
        }
        public function insertData($tabel,$kolom,$values){
            $query = $this->db->query("INSERT INTO $tabel($kolom) VALUES($values)");
            if($query == true){
                return true;
            }else{
                return false;
            }
        }
        public function getAll($tabel){
            $query = $this->db->query("SELECT * FROM $tabel");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }
        public function getId($tabel,$where){
            $query = $this->db->query("SELECT * FROM $tabel WHERE $where");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }
        public function limitAir($mulai,$perPage){
            $query = $this->db->query("SELECT id_air, tanggal_permintaan, jenis_air, jumlah, keterangan, gedung from air LIMIT $mulai,$perPage");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }
        public function searchAir($where,$like){
            $query = $this->db->query("SELECT id_air, tanggal_permintaan, jenis_air, jumlah, keterangan, gedung from air WHERE $where LIKE '%".$like."%'");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }

        public function searchPerkakas($where,$like){
            $query = $this->db->query("SELECT id_perkakas, tanggal_permintaan, jenis_perkakas, jumlah, keterangan, gedung, lantai from perkakas WHERE $where LIKE '%".$like."%'");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }
        // ----------------------
        // kumpulan sql relasi
        // ----------------------
        public function getRelasiAir(){
            $query = $this->db->query("SELECT id_air, tanggal_permintaan, jenis_air, jumlah, keterangan, gedung from air");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }
        public function getRelasiPerkakas(){
            $query = $this->db->query("SELECT id_perkakas, tanggal_permintaan, jenis_perkakas, jumlah, keterangan, gedung, lantai FROM perkakas");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }
        public function getRelasiAkunId($where){
            $query = $this->db->query("SELECT tb_pegawai.nip,tb_petugas.nama_petugas,tb_pegawai.alamat,tb_petugas.username,tb_petugas.password,tb_level.nama_level from tb_petugas inner join tb_level on tb_level.id_level = tb_petugas.id_level inner join tb_pegawai on tb_pegawai.id_pegawai = tb_petugas.id_petugas WHERE $where");
            $data  = array();
            foreach($query as $x){
                $data[] = $x;
            }
            return $data;
        }
    }
?>