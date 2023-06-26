<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ruta extends Seeder
{
    public function run(): void
    {
        $data = [
            ['1', 'Lima', 'Arequipa', '1']
        ];
        foreach ($data as $item)
        {
            Ruta::create([
                'id_ruta' => $item[0],
                'origen' => $item[1],
                'destino' => $item[2],
                'encargado' => $item[3],
            ]);
        }
    }
}

