<?php

namespace App\Library;

class Konversi
{
    public static function tanggalIndo($date)
    {
        $data = date('d F Y', strtotime($date));

        return $data;
    }
}
