<?php

namespace App;

class MahasiswaBaru extends Mahasiswa
{
	protected $no_registrasi;

	function __construct($nim, $nama, $tgl, $jk, $no_reg)
	{
		$this->nim = $nim;
		$this->nama = $nama;
		$this->tanggal_lahir = $tgl;
		$this->jenis_kelamin = $jk;
		$this->no_registrasi = $no_reg;
	}

	public function bayarGedung()
	{
	}
	public function getNoRegistrasi()
	{
		return $this->no_registrasi;
	}
	public function setNoRegistrasi($no_registrasi)
	{
		$this->no_registrasi = $no_registrasi;
	}
	public function parentTampilAngkatan()
	{
		return parent::tampilkanAngkatan();
	}
}
