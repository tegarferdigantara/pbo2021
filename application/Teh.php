<?php

namespace App;

use App\Minuman;

class Teh implements Minuman
{
    public function buat()
    {
        echo "Siapkan Air Panas" . '<br>';
        echo "Siapkan gelas" . '<br>';
        echo "Masukkan Teh & Gula kedalam gelas" . '<br>';
        echo "Masukkan Air Panas kedalam Gelas berisi teh & gula tadi" . '<br>';
        echo "Aduk hingga sari teh keluar dan crystal gula mulai menghilang" . '<br>';
    }
    public function minum()
    {
        echo "Seruput teh sedikit demi sedikit" . '<br>';
    }

    public function masukkanEs()
    {
        echo "Es Telah dimasukkan" . '<br>';
    }
    public function tambahSusu()
    {
        echo "Susu telah ditambah" . '<br>';
    }
}
