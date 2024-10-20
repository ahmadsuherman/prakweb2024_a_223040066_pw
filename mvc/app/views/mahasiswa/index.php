<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswaa
            </button>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs): ?>
            <li class="list-group-item"><?= $mhs['nama']; ?>
                <a onclick="return confirm('Apakah yakin ingin dihapus?');" href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end me-1">hapus</a>
                <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end me-1">detail</a>
            </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
      <div class="modal-body">  
        <div class="mb-3">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" name="nrp" id="nrp" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
        </div>

        <div class="form-group">
          <label for="jurusan" id="jurusan">Jurusan</label>
          <select id="jurusan" class="form-control" name="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Pangan">Teknik Pangan</option>
            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
          </select>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>