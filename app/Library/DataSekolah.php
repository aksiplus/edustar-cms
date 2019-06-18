<?php

namespace App\Library;

class DataSekolah
{
    public static function bentukPendidikan()
    {
        $data = [
            'sd' => 'Sekolah Dasar',
            'mi' => 'Madrasah Ibtidaiyah',
            'smp' => 'Sekolah Menengah Pertama',
            'mts' => 'Madrasah Tsanawiyah',
            'sma' => 'Sekolah Menengah Atas',
            'ma' => 'Madrasah Aliyah',
            'smk' => 'Sekolah Menengah Kejuruan'
        ];

        return $data;
    }
}
