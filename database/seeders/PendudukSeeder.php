<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penduduk::create([
            'nik'      => '3201384111030001',
            'name'     => 'Rina',
            'username' => 'Rina nose',
            'email'    => 'penduduk@localhost.com',
            'password' => bcrypt('password'),
            'telp'     => '081214793879',
        ]);
    }
}
