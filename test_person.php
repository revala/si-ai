<?php
require 'person.php';

$person = new Person('Revala', 'Mendengarkan musik');
$person->tampil();
echo '<hr>';
$person->set_ktp('Jogjakarta');
$person->tampil();
?>