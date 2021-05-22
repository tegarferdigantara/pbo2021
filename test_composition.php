<?php

use App\Pengguna;
use App\Alamat;

require_once('vendor/autoload.php');

$pengguna = new Pengguna(3, "Tegar Ferdigantara", new Alamat(14, "Pontianak"));

$alamat_pengguna = $pengguna->getAlamat();
echo $alamat_pengguna->getKota();
