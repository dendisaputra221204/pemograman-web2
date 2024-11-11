<?php
 include "orang.php";
 include "visibilty.php";
 include "nilai.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRATIKUM 2</title>
</head>
<body>
    <h1>pratikum 2 </h1>
    <div>
        <?php
        $Reza = new orang;
        $Reza->nama = "dendi";

        $Reza->ucapsalam();

        echo "<br>";

        $emely = new orang;
        $emely->nama = "emely suaib";

        $emely->ucapsalam();

        echo "<br>";

        $visibilty = new visibilty();
        $visibilty-> tampilkanproperty();

        echo "ini akses di luar kelas <br>";
        echo "public    : " . $visibilty->public . '<br>';
        //echo "protected : " . $visibilty->protected . '<br>';
        //echo "private   : " . $visibilty->private . '<br>';

        echo "<br> <br>"

        echo "nilai MK Pemograman web: <br>";
        $nilai = new nilai();
        $nilai->settugas(79);
        $nilai->setuts(90);
        $nilai->setuas(89);

        echo "nilai uts   : " . $nilai->getuts(). "<br>";
        echo "nilai uas   : " . $nilai->getuas(). "<br>";
        echo "nilai tugas : " . $nilai->getugas(). "<br>";
        echo "nilai nilai : " . $nilai->hitungtotal(). "<br>";

        ?>
        </div>
    
</body>
</html>