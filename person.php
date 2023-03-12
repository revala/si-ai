<?php
class Person{
    var $nama;
    var $hobi;
    protected $ktp;

    function __construct($nama, $alamat){
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    function set_ktp($ktp){
        $this->ktp = $ktp;
    }

    function tampil(){
        echo 'Nama saya ' . $this->nama . ' Hobi saya ' . $this->alamat;
        echo "<br>";
        echo 'KTP saya asal ' . $this->ktp;
    }
}
?>