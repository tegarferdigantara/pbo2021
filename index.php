<?php
require_once("initialize.php");

use application\backend\Mahasiswa;
use application\backend\MahasiswaBaru;

$tegar = new MahasiswaBaru('H1101191071', 'Tegar Ferdigantara', '24-09-2001', 'Pria');
$andri = new Mahasiswa('H1101181070', 'ANDRY MAULANA', '2001-01-01', 'Pria');
$bayu = new Mahasiswa('H1101191047', 'Bayu Firmadi', '12-02-2001', 'Pria');
