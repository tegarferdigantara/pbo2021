<?php

namespace App;

class EsJeruk implements Minuman
{
    public function buat()
    {
        echo "Masukkan blender" . '<br>';
    }

    public function minum()
    {
        echo "Minumlah" . '<br>';
    }

    public static function diLihat()
    {
        echo "Cuman boleh dilihat saja, tidak diminum" . '<br>';
    }
}
