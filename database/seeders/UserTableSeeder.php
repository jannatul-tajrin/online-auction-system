<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'address'=>'dhaka',
                'password'=>bcrypt('abcd'),
                'phone'=>'01734339068',
                'role'=>'admin',
            ]
            );
    }
}
