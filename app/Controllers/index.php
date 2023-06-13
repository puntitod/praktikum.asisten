<?php

use App\Models\AsistenModel;

$asistenData = [
        [
            'NIM' => '195314058',
            'NAMA' => 'BERNADETHA MEGA DEVINA AYUNINGTYAS',
            'PRAKTIKUM' => 'Pembelajaran Mesin 3.12',
            'IPK' => '3.12',
        ],
        [
            'NIM' => '215314001',
            'NAMA' => 'DEONISIUS AMADEUS FEBRIAN SARDJANANTO',
            'PRAKTIKUM' => 'Rekayasa Perangkat Lunak 3.5',
            'IPK' => '3.5',
        ],
        [
            'NIM' => '215314002',
            'NAMA'=> 'WENRY MANGIHUT PURBA',
            'PRAKTIKUM' => 'Pemrograman Berbasis Platform 3.02',
            'IPK' => '3.02',
        ],
        [
            'NIM' => '215314003',
            'NAMA' => 'RANGGA TRI NUGROHO',
            'PRAKTIKUM' => 'Struktur Data Linear 3.3',
            'IPK' => '3.3',
        ],
        [
            'NIM' => '215314004',
            'NAMA' => 'GERARDUS KRISTHA BAYU INDRAPUTRA',
            'PRAKTIKUM' => 'Pembelajaran Mesin 3.8',
            'IPK' => '3.8',
        ],
        [
            'NIM' => '215314005',
            'NAMA' => 'DOMINICO SAVIO AMADIS FEBRIAN SARDJANANTO',
            'PRAKTIKUM' => 'Rekayasa Perangkat Lunak 3.4',
            'IPK' => '3.4',
        ],
        [
            'NIM' => '215314006',
            'NAMA' => 'FAJAR AL NAJIIM',
            'PRAKTIKUM' => 'Struktur Data Linear 3.1',
            'IPK' => '3.1',
        ],
        [
            'NIM' => '215314007',
            'NAMA' => 'ALEXANDER ADMA KARYADI',
            'PRAKTIKUM' => 'Pemrograman Berbasis Platform 3.3',
            'IPK' => '3.3',
        ],
        [
            'NIM' => '215314009',
            'NAMA' => 'MAXIMUS SIMON WERANG',
            'PRAKTIKUM' => 'Struktur Data Linear 3.25',
            'IPK' => '3.25',
        ],
        [
            'NIM' => '215314010',
            'NAMA' => 'SIRILUS ESPIANTO WILLY WASKITO',
            'PRAKTIKUM' => 'Pembelajaran Mesin 3.6',
            'IPK' => '3.6',
        ],
    ];
    
    $model = new AsistenModel();
    
    foreach ($asistenData as $data) {
        $model->insert($data);
    }