<?php 
require_once ('User.php');
require_once ('Mahasiswa.php');
require_once ('Dosen.php');
require_once ('MahasiswaBaru.php');
require_once ('Pegawai.php');

$tegar = new Mahasiswa('H1101191071','Tegar Ferdigantara','24-09-2001','Pria');
$andri = new Mahasiswa('H1101181070','ANDRY MAULANA','2001-01-01','Pria');
$bayu = new Mahasiswa('H1101191047','Bayu Firmadi','12-02-2001','Pria');


// $tegar->nim = "H1101191071"; 
// $tegar->nama = "Tegar Ferdigantara";
// $tegar->tanggal_lahir = "24-09-2001";
// $tegar->jenis_kelamin = "Laki-laki<br>";

<<<<<<< HEAD
// $andri->nim = "H1101191070"; 
// $andri->nama = "Andri Maulana";
// $andri->tanggal_lahir = "01-01-2001";
// $andri->jenis_kelamin = "Laki-laki<br>";

// $bayu->nim = "H1101191047"; 
// $bayu->nama = "Bayu Firmadi";
// $bayu->tanggal_lahir = "12-02-2001";
// $bayu->jenis_kelamin = "Laki-laki<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Praktikum PBO 2021</title>
</head>
<body>
	<h2><?php $tegar->tampilkanNama($tegar);  ?></h2>
	<?php 
	$tegar->tampilkanUmur();
	echo '<br>';
	$tegar->tampilkanAngkatan();
	?>
	<h2><?php $andri->tampilkanNama($andri);  ?></h2>
	<?php 
	$andri->tampilkanUmur();
	echo '<br>';
	$andri->tampilkanAngkatan();
	?>
	<h2><?php $bayu->tampilkanNama($bayu);  ?></h2>
	<?php 
	$bayu->tampilkanUmur();
	echo '<br>';
	$bayu->tampilkanAngkatan();
	?>

</body>
</html>
=======
$bayu->nim = "H1101191047"; 
$bayu->nama = "Bayu Firmadi";
$bayu->tanggal_lahir = "12-02-2001";
$bayu->jenis_kelamin = "Laki-laki<br>";
?>
>>>>>>> 9e5555cfafa9ba551c5300e399a81dc975544eed
