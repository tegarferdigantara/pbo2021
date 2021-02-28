<?php
class Mahasiswa {
	public $nim;
	public $nama;
	public $tanggal_lahir;
	public $jenis_kelamin;
 
 	function __construct($nim,$nama,$tgl,$jk){
	 	$this->nim = $nim;
	    $this->nama = $nama;
	    $this->tanggal_lahir = $tgl;
	    $this->jenis_kelamin = $jk;
 }
 	public function tampilkanAngkatan(){
	  	$angkatan = $this->nim;
	  	$sub = (substr($angkatan,5,2));
	  	echo 'Angkatan = ',$sub;  	
 }
 
 	public function tampilkanUmur(){
   		$umur = date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
   		echo 'Umur = ', $umur;
 }
 
 	public function tampilkanNama($nama){
   		echo $this->nama;

 }
}
?>
