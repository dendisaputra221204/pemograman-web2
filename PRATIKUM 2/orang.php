<?php

class orang{
    //propperty
    public $nama;
    public $tgllahir;
    public $alamat;

    //constructor
    public function __constructor()
    {
        $this->nama = "Anonim";
    }

    //method
    public function ucapsalam(){
        echo "<h2> Hallo, perkenalkan nama saya " . $this->nama . "</h2>";
    }

    //destructor
    public function __destruct()
    {
        echo "ini adalah destructor dari " . $this->nama;
        echo "<br>";
    }
}