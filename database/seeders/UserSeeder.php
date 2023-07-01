<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Luis', 'María', 'Carlos', 'Ana', 'Juan', 'Laura', 'Pedro', 'Rosa', 'José', 'Sofía'];

        $users = [];

        for ($i = 0; $i < 10; $i++) {
            $name = $names[$i];

            if ($i < 5) {
                $name .= ' Empresa';
                $email = strtolower(str_replace(' ', '', $name)) . '@example.com';
            } else {
                $name .= ' Cliente';
                $email = strtolower(str_replace(' ', '', $name)) . '@example.com';
            }

            $users[] = [
                'name' => $name,
                'email' => $email,
                'password' => bcrypt('password123'),
            ];
        }

        DB::table('users')->insert($users);
    }
}
