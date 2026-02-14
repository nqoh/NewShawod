<?php

namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Role::create(['role' => 'Client']);
         Role::create(['role' => 'Admin']);
         User::factory()->create();
         Coupon::factory()->create();
    }
}
