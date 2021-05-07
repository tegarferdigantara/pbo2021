<?php
require_once('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\EsJeruk;
use App\Teh;

$cendol_tegar = new Cendol();
$cendol_tegar->minum();

$kopi_aming = new Kopi();
$kopi_aming->buat();
$kopi_aming->minum();

$kopi_asiang = new Kopi();
$kopi_asiang->buat();
$kopi_asiang->tambahSusu();
$kopi_asiang->minum();

EsJeruk::diLihat();

$teh_sosor = new Teh();
$teh_sosor->buat();
$teh_sosor->minum();
$teh_sosor->masukkanEs();
$teh_sosor->tambahSusu();
