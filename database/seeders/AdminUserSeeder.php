<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'milan',
            'sirname'=>'d',
            'address'=>'ahm',
            'state'=>'gujrat',
            'city'=>'ahm',
            'area'=>'gurukul',
            'father_name'=>'r',
            'email' => 'admin@gmail.com',
            'username'=>'milan123',
            'password' => bcrypt('12345678'),
            'role_id'=>'1',

        ]);
    }
}
