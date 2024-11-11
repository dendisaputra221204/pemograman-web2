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
            <div class="my-3">
            <button data-bs-toggle="modal" data-bs-target="#tambahmodal" class="btn btn-primary"><i class="bi bi-plus-circle"></i> TAMBAH</button>
            </div>
            
            <table class="table table-striped">
                <thead>
                    <tr class="">
                        <th scope="col">NO</th>
                        <th scope="col">JUDUL</th>
                        <th scope="col">PENGARANG</th>
                        <th scope="col">PENERBIT</th>
                        <th scope="col">TAHUN</th>
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
                        <td>
                          <a href="/index.php/edit?id_buku=<?= $buku->getid();?>" 
                          class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i>edit</a>
                          <button data-bs-toggle="modal" data-bs-target="#hapusmodal"
                           data-bs-id="<?= $buku->getid(); ?>" data-bs-judul="<?
                           $buku->getjudul(); ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i>hapus</button>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody> 
            </table>
        </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="tambahmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">form tambah buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formtambah" action="/index.php/simpan" method="POST">
          <div class="mb-3">
            <label for="judul">judul</label>
            <input type="text" name="judul" id "judul" class="form-control">
          </div>
          <div class="mb-3">
            <label for="pengarang">pengarang</label>
            <input type="text" name="pengarang" id "pengarang" class="form-control">
          </div>
          <div class="mb-3">
            <label for="penerbit">penerbit</label>
            <input type="text" name="penerbit" id "penerbit" class="form-control">
          </div>
          <div class="mb-3">
            <label for="tahun">tahun</label>
            <input type="text" name="tahun" id "tahun" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formtambah" class="btn btn-primary"><i class="bi bi-floppy"></i> simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="hapusmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">konfirmasihapus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/hapus" id="formhapus" method="POST">
          <input type="hidden" name="id_buku" id="id_buku"></form>
        
        <p>apakah anada yakin ingin mengapus data buku <span id="judul-buku"></span> ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formhapus" class="btn btn-danger"><i class="bi-bi-trash"></i> hapus</button>
      </div>
    </div>
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    const hapusmodal = document.getElementById('hapusModal')
if (hapusModal) {
  hapusModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const id = button.getAttribute('data-bs-id');
    const judul = button.getAttribute('data-bs-data-judul');
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const text_id = hapusModal.querySelector('#id_buku')
    const text_judul = hapusModal.querySelector('#judul-buku')

    text_id.value = id;
    text_judul.textContent = judul;
  })
  
}
<>script
  </body>
</html>