<?php

namespace application\backend;

require_once("User.php");

class Mahasiswa extends User
{
	protected $nim,
		$nama,
		$tanggal_lahir,
		$jenis_kelamin;

	public function __construct($nim, $nama, $tgl, $jk)
	{
		$this->nim = $nim;
		$this->nama = $nama;
		$this->tanggal_lahir = $tgl;
		$this->jenis_kelamin = $jk;
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
}
