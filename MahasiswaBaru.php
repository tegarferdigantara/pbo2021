<?php 
require_once ('Mahasiswa.php');
class MahasiswaBaru extends Mahasiswa{
	protected $no_registrasi;

	public function bayarGedung(){
		
	}
	public function getNoRegistrasi(){
		return $this->no_registrasi;
	}
	public function setNoRegistrasi($no_registrasi){
		$this->no_registrasi = $no_registrasi;
	}
}
