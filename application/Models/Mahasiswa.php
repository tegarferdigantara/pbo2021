<?php

namespace App\Models;

require_once('Pengguna.php');

use App\Models\TugasAkhir;

class Mahasiswa extends Pengguna
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function InputMakul()
    {
    }
    public function updateProfil()
    {
    }
    function __construct($nim, $nama, $ipk, $alamat)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;
    }
}
