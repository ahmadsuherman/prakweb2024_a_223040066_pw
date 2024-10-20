<?php

class Mahasiswa extends Controller{

    public function index () {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        
        $this->view ('templates/header', $data);
        $this->view ('mahasiswa/index', $data);
        $this->view ('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        
        $this->view ('templates/header', $data);
        $this->view ('mahasiswa/detail', $data);
        $this->view ('templates/footer');
    }

    public function tambah() {
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash ('Berhasil','ditambahkan','success');
            header('location:' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlash ('Gagal','ditambahkan','danger');
            header('location:' . BASEURL . '/mahasiswa');
        }
    }

    public function hapus($id) {
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash ('Berhasil','dihapus','success');
            header('location:' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlash ('Gagal','dihapus','danger');
            header('location:' . BASEURL . '/mahasiswa');
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'dibuah', 'success');
            header('location:' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('location:' . BASEURL . '/mahasiswa');
        }
    }

    public function cari()
    {
        $data["judul"] = "Cari mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}

?>