<?php
require 'Mahasiswa.php';

$mhs = new Mahasiswa('Thomas', 'Bernyanyi', '1310');
$mhs->tampil();
$mhs->set_ktp('111');
$mhs->prodi = 'Teknik Lingkungan';
echo 'KTP saya asal' . $mhs->get_ktp();
echo 'Prodi saya adalah ' . $mhs->prodi;
?>