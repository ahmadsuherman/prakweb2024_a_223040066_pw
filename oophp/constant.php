<?php

// define("NAMA", "Ahmad Suherman");
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR

// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";

// class Coba {
//     const NAMA = "Ahmad Suherman";
// }

// echo Coba::NAMA;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>