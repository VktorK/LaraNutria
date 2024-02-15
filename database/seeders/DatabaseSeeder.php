<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Provider::factory(10)->create();
//        \App\Models\Order::factory(10)->create();
//        \App\Models\Category::factory(10)->create();
//        \App\Models\Gender::factory(10)->create();
//        \App\Models\Profile::factory(10)->create();
//        \App\Models\Promocode::factory(10)->create();
//        \App\Models\Service::factory(10)->create();
//        \App\Models\StatusofTransaction::factory(10)->create();
//        \App\Models\Transaction::factory(10)->create();
//
//        \App\Models\ServiceUser::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
