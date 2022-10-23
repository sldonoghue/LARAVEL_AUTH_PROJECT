<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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

      // \App\Models\User::factory()->create([
      //   'name' => 'Test User',
      //   'email' => 'test@example.com',
      // ]);

      //? Command to seed the database: php artisan migrate:refresh --seed
      
      \App\Models\Listing::factory(10)->create();

    }
}
