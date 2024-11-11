<?php

require_once "buku.php";
require_once "Data Base/database.php";

class listbuku{

    public function getdata(){
        $db = new database();
        $koneksi = $db->getkoneksi();

        $sql = "SELECT * FROM buku";

        $query = $koneksi->query($sql);

        $list_buku = [];

        if($query->num->rows > 0){
            while($row = $query->fetch_assoc()){
                $buku = new buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                $buku->setid($row['id']);
                //
                array_push($listbuku, $buku);
            }
        }

        return $list_buku;

    }
}