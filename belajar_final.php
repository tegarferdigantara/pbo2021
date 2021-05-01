<?php
require_once('vendor/autoload.php');

use App\MahasiswaBaru;

$madha = new MahasiswaBaru("H1101191035", "Tegar", "24092001", "Pria", '12323');
$madha->tuntaskan();
