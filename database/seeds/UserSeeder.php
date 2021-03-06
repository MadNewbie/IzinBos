<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        $user= User::create([
            'name' => 'admin',
            'email' => 'admin@b.c',
            'password' => bcrypt('qwer1234')
        ]);
        $user->assignRole(1);

        $user= User::create([
            'name' => 'user',
            'email' => 'user@b.c',
            'password' => bcrypt('qwer1234')
        ]);
        $user->assignRole(2);
    }
}
