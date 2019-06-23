<?php

namespace App\Library;

class DataUmum
{
    public static function jenisKelamin()
    {
        $data = [
            'l' => 'Laki-laki',
            'p' => 'Perempuan'
        ];

        return $data;
    }

    public static function agama()
    {
        $data = [
            'islam', 'protestan', 'katholik', 'hindu', 'buddha', 'kong hu cu'
        ];

        return $data;
    }
}
