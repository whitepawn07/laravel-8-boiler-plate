<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Paul',
            'email' => 'johnpaul.sargento29@gmail.com',
            'phonenumber' => '09959053870',
            'password' => bcrypt('admin')
        ]);
    }
}
