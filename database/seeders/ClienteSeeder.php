<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['María Cliente', 'Ana Cliente', 'Laura Cliente', 'Rosa Cliente', 'Sofía Cliente'];

        $clientes = [];

        foreach ($names as $name) {
            $clientes[] = [
                'name' => $name,
            ];
        }

        DB::table('clientes')->insert($clientes);
    }
}
