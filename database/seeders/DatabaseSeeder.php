<?php

namespace Database\Seeders;
use App\Models\User;
use Spatie\Permission\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         $user =   User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@gmail.com',
         ]);
        $role = Role::create(['name' => 'Admin']);
        $user->assignRole($role);
    }
}
