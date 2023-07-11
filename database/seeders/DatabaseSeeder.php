<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Event;
use App\Models\Registration;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'LIand',
            'username' => 'LIandd',
            'role_id' => 3,
            'email' => 'LIand@gmail.com',
            'password' => bcrypt('rootroot')
        ]);

        User::factory(5)->create();
        Event::factory(10)->create();
        Registration::factory(15)->create();

        Category::create([
            'name' => 'Konser',
            'slug' => 'konser'
        ]);
        Category::create([
            'name' => 'Hajatan Wibu',
            'slug' => 'hajatan-wibu'
        ]);
        Category::create([
            'name' => 'Seminar',
            'slug' => 'seminar'
        ]);
        Role::create([
            'name' => 'Common'
        ]);
        Role::create([
            'name' => 'Uncommon'
        ]);
        Role::create([
            'name' => 'Rare'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}