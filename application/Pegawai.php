<?php

namespace application\backend;

require_once("User.php");

class Pegawai extends User
{
  protected $nip,
    $nama,
    $no_hp,
    $gaji_pokok;

  public function tampilkanGaji()
  {
  }
  public function getNim()
  {
    return $this->nip;
  }
  public function getNama()
  {
    return $this->nama;
  }
  public function getTanggalLahir()
  {
    return $this->no_hp;
  }
  public function getJenisKelamin()
  {
    return $this->gaji_pokok;
  }
  public function setNim($nip)
  {
    $this->nim = $nip;
  }
  public function setNama($nama)
  {
    $this->nama = $nama;
  }
  public function setTanggalLahir($no_hp)
  {
    return $this->no_hp = $no_hp;
  }
  public function setJenisKelamin($gaji_pokok)
  {
    return $this->gaji_pokok = $gaji_pokok;
  }
}
