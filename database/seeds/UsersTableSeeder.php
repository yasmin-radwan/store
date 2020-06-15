<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = \App\Role::create(['name'=>'admin']);
        $managerRole = \App\Role::create(['name'=>'manager']);
        $supplierRole = \App\Role::create(['name'=>'supplier']);

        $adminUser = \App\User::create([
            'email'=> 'admin@gmail.com',
            'name'=>'Admin',
            'password'=>Hash::make('password'),
        ]);

        $managerUser = \App\User::create([
            'email'=> 'manager@gmail.com',
            'name'=>'Manager',
            'password'=>Hash::make('password'),
        ]);

        $supplierUser = \App\User::create([
            'email'=> 'supplier@gmail.com',
            'name'=>'Supplier',
            'password'=>Hash::make('password'),
        ]);

        $adminUser->roles()->attach($adminRole);
        $adminUser->roles()->attach($managerRole);
        $adminUser->roles()->attach($supplierRole);

        $managerUser->roles()->attach($managerRole);
        $managerUser->roles()->attach($supplierRole);

        $supplierUser->roles()->attach($supplierRole);
    }
}