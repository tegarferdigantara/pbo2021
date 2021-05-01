<?php

namespace App;

class Mahasiswa extends User
{
	protected $nim,
		$nama,
		$tanggal_lahir,
		$jenis_kelamin;
	const AKTIF = 1;
	const NON_AKTIF = 0;
	public static $status = self::AKTIF;
	public function __construct($nim, $nama, $tgl, $jk)
	{
		$this->nim = $nim;
		$this->nama = $nama;
		$this->tanggal_lahir = $tgl;
		$this->jenis_kelamin = $jk;
	}
	public static function bergerak()
	{
		echo "agen solusi, bukan agen perubahan";
	}

	final public function tuntaskan()
	{
		self::bergerak();
		echo "\nMemperbaiki menjadi lebih baik";
	}
	public function tampilkanAngkatan()
	{
		$angkatan = $this->nim;
		$sub = (substr($angkatan, 5, 2));
		echo 'Angkatan = ', $sub;
	}

	public function tampilkanUmur()
	{
		$umur = date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
		echo 'Umur = ', $umur;
	}

	public function tampilkanNama($nama)
	{
		echo $this->nama;
	}
	public function getNim()
	{
		return $this->nim;
	}
	public function getNama()
	{
		return $this->nama;
	}
	public function getTanggalLahir()
	{
		return $this->tanggal_lahir;
	}
	public function getJenisKelamin()
	{
		return $this->jenis_kelamin;
	}
	public function setNim($nim)
	{
		$this->nim = $nim;
	}
	public function setNama($nama)
	{
		$this->nama = $nama;
	}
	public function setTanggalLahir($tanggal_lahir)
	{
		return $this->tanggal_lahir = $tanggal_lahir;
	}
	public function setJenisKelamin($jenis_kelamin)
	{
		return $this->jenis_kelamin = $jenis_kelamin;
	}
	public static function hitungSks($sks, $bobot)
	{
		return $sks * $bobot;
	}
}
