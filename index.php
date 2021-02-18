<?php 
include ('Mahasiswa.php');

$tegar = new Mahasiswa();
$andri = new Mahasiswa();
$bayu = new Mahasiswa();

$tegar->nim = "H1101191071"; 
$tegar->nama = "Tegar Ferdigantara";
$tegar->tanggal_lahir = "24-09-2001";
$tegar->jenis_kelamin = "Laki-laki<br>";

$andri->nim = "H1101191070"; 
$andri->nama = "Andri Maulana";
$andri->tanggal_lahir = "10-10-2001";
$andri->jenis_kelamin = "Laki-laki<br>";

$bayu->nim = "H1101191047"; 
$bayu->nama = "Tegar Ferdigantara";
$bayu->tanggal_lahir = "12-02-2001";
$bayu->jenis_kelamin = "Laki-laki<br>";
?>