<?php
require_once("vendor/autoload.php");

use App\Mahasiswa;
use App\MahasiswaBaru;

$tegar = new MahasiswaBaru('H1101191071', 'Tegar Ferdigantara', '24-09-2001', 'Pria', '12323');
$andri = new Mahasiswa('H1101181070', 'ANDRY MAULANA', '2001-01-01', 'Pria', '12323');
$bayu = new Mahasiswa('H1101191047', 'Bayu Firmadi', '12-02-2001', 'Pria', '12323');
