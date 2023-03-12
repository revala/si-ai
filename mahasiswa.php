<?php
require 'Person.php';

class Mahasiswa extends Person {

    private $nim;
    public $prodi;

    function __construct($nama, $alamat, $nim=''){
        parent::__construct($nama, $alamat);
        $this->nim = $nim;
    }
    function tampil(){
        echo 'Nama saya ' . $this->nama . 'Hobi saya ' . $this->hobi . 'NIM saya ' . $this->nim;
    }

    function get_ktp(){
        return $this->ktp;
    }
}
?>