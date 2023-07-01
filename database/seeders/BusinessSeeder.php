<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Luis Empresa', 'Carlos Empresa', 'Juan Empresa', 'Pedro Empresa', 'José Empresa'];

        $businesses = [];

        foreach ($names as $name) {
            $businesses[] = [
                'name' => $name,
            ];
        }

        DB::table('businesses')->insert($businesses);
    }
}
