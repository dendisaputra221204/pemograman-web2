<?php

require_once "Model/ListBuku.php";

class BukuController{

    public function jalankan(){
        // menggunakan model
        $daftar_buku_model = new ListBuku();
        $daftar_buku = $daftar_buku_model;

        // var_dump($daftar_buku->getData());
        // die();

        //mengirim dan menampilkan data ke View
        include_once "View/BukuView.php";
    }

    public function edit(){
        $id_buku = $_GET['id_buku'];

        $daftar_buku = new ListBuku();
        $buku = $daftar_buku->getBukuById($id_buku);
        if($buku){
            include_once "View/EditBukuView.php";
        }else{
            header("Location: http://localhost/index.php");
        }
    }

    public function update(){
        echo "update";
    }

    public function simpan(){
        $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        //buat object buku dari class buku
        $buku = new buku($judul, $pengarang, $penerbit, $tahun);

        //menyimpan buku dengan method simpan di clas list buku

        $daftar_buku = new listbuku();
        $daftar_buku->simpan($buku);

            //membuat sesion untuk menampilkan pesan atau simpan / gagal

            sesion_start();
            if(status){
            $_SESSION['message'] = "Data buku dengan judul" . $id_buku . "Berhasil disimpan";
        }else{
            $_SESSION['error'] = "data gagal disimpan";
        }

        //redirect ke index.php

        header('Location: https://localhost/index.php');
        exit;
    
    }

    public function hapus(){
        $id_buku = $_POST['id_buku'];

        $daftar_buku = new Listbuku();
        if(status){

            //membuat sesion untuk menampilkan pesan atau simpan / gagal

            sesion_start();
            $_SESSION['message'] = "Data buku dengan judul" . $id_buku . "Berhasil disimpan";
        }else{
            $_SESSION['error'] = "data gagal disimpan";
        }

        //redirect ke index.php

        header('Location: https://localhost/index.php');
        exit;
    }

}