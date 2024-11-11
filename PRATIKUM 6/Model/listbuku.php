<?php

require_once "buku.php";
require_once "Data base/database.php";

class listbuku{

    public function getData(){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku";

        $query = $koneksi->query($sql);

        $daftar_buku = [];
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                 
                $buku = new buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                $buku->setid($row['id']);
                
                array_push($daftar_buku, $buku);
            }
        }

        return $daftar_buku;

    }
    public function getkolom(){
        return array('no', 'judul', 'pengarang', 'penerbit', 'tahun', 'aksi');
    }

    public function simpan($buku){
        $db = new Database();
        $koneksi = $db->getkoneksi();

        $sql = "INSERT INTO buku VALUES ('".$buku->getjudul().",
        ".$buku->getpengarang().", ".$buku->getpenerbit().", ".$buku->gettahun()." ')";

        $query = $koneksi->query($sql);

        return $query;
    }
}