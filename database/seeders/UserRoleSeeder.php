<?php

namespace Database\Seeders;
use App\Models\UserRole;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Tambahkan user role superadmin
         UserRole::create(['role' => 'superadmin']);

         // Tambahkan user role admin
         UserRole::create(['role' => 'admin']);
 
         // Tambahkan user role tutor
         UserRole::create(['role' => 'tutor']);
 
         // Tambahkan user role user
         UserRole::create(['role' => 'user']);
    }
}
