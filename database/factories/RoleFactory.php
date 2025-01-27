<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Student', 'Instructor', 'Parent', 'Admin'];

        foreach ($roles as $role) {
            Role::factory()->create([
                'role' => $role,
            ]);
        }
    }
}
