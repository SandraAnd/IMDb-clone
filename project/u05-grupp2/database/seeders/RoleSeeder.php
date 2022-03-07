<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //makes insert


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'admin',
            'created_at' => date('d-m-y h:i:s')
        ]);
        DB::table('roles')->insert([
            'role' => 'registereduser',
            'created_at' => date('d-m-y h:i:s')
        ]);        
    }
}
