<?php

namespace App;

class Dosen extends Pegawai
{
	protected $nidn,
		$jabatan_akademis;
	public function mengajar()
	{
	}
	public function meneliti()
	{
	}
	public function getNidn()
	{
		return $this->nidn;
	}
	public function getJabatanAkademis()
	{
		return $this->jabatan_akademis;
	}
	public function setNidn($nidn)
	{
		$this->nidn = $nidn;
	}
	public function setJabatanAkademis($jabatan_akademis)
	{
		$this->jabatan_akademis = $jabatan_akademis;
	}
}
