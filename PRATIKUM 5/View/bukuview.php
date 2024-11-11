<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>

  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>DAFTAR BUKU</h1>
            <div class="my-3"></div>
            <button class="btn btn-primary"><i class="bi bi-plus-circle"></i> TAMBAH</button>
            <table class="table table-striped">
                <thead>
                    <tr class="">
                        <th scope="col">no</th>
                        <th scope="col">judul</th>
                        <th scope="col">pengarang</th>
                        <th scope="col">penerbit</th>
                        <th scope="col">tahun</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    <?php foreach($daftar_buku as $buku):?>
                    <tr class="">
                        <td><?= $buku->getid();?></td>
                        <td><?= $buku->getjudul();?></td>
                        <td><?= $buku->getpengarang();?></td>
                        <td><?= $buku->getpenerbit();?></td>
                        <td><?= $buku->gettahun();?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody> 
            </table>
        </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>