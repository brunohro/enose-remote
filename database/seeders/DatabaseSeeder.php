<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'id' => Str::uuid(),           // gera um UUID único
            'name' => 'Admin Master',
            'email' => 'admin@exemplo.com',
            'password' => '12345678', // senha que você escolheu
            'is_admin' => true,
            'email_verified_at' => now(),
        ]);
    }
}
