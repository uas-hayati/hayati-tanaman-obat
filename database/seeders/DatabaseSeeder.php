<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // $this->call(UsersTableSeeder::class);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        User::create([
            'name' => 'Erni Veronica Sidabutar',
            'email' => 'vero@gmail.com',
            'password' => Hash::make('029')
        ]);

        User::create([
            'name' => 'Nur Avivah',
            'email' => 'avivah@gmail.com',
            'password' => Hash::make('010')
        ]);

    }
}
