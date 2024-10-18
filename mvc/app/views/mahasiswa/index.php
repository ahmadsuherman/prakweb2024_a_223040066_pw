<div class="container mt-5" >
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach ($data['mhs'] as $hms): ?>
            <ul>
                <li><?= $hms['nama']; ?></li>
                <li><?= $hms['nrp']; ?></li>
                <li><?= $hms['email']; ?></li>
                <li><?= $hms['jurusan']; ?></li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>