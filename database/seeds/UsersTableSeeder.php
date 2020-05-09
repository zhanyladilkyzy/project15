<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'role_id'=>'1',
          'name'=>'Admin',
          // 'username'=>'Aru',
          'email'=>'a.demeubaeva@yandex.com',
          'password'=>bcrypt('expert555'),
        ]);

        DB::table('users')->insert([
          'role_id'=>'2',
          'name'=>'Author',
          // 'username'=>'Arman',
          'email'=>'asyl.armo@yandex.com',
          'password'=>bcrypt('301class'),
        ]);
    }
}
