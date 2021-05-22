<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$Tegar = new Pengguna(3, "Tegar Ferdigantara", new Alamat(14, "Pontianak"));

$lapak_budi = new Penjual();
$lapak_budi->setName('Budi Sahaja');
$lapak_budi->setId(1);

$lapak_andi = new Penjual();
$lapak_andi->setName('Andi Yaja');
$lapak_andi->setId(2);

$lapak_wali = new Penjual();
$lapak_wali->setName('Wali Murdi');
$lapak_wali->setId(3);

$Tegar->setPenjual($lapak_budi);
$Tegar->setPenjual($lapak_andi);
$Tegar->setPenjual($lapak_wali);

$penjual_tegar = $tegar->getPenjual();
echo $penjual_Tegar[0]->getName();// Ada 3 Index (0,1,2)