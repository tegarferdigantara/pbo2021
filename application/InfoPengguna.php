<?php

namespace App;

use App\Pengguna;

class InfoPengguna
{
    private $id;
    private $no_hp;
    private $no_wa;
    private $instagram;
    private $Pengguna;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setPengguna(Pengguna $pengguna)
    {
        $this->pengguna = $pengguna;
    }
    public function setInstagram($username)
    {
        $this->instagram = $username;
    }
    public function getInstagram()
    {
        return $this->instagram;
    }
}
