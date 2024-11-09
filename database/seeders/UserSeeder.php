<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'pustakawan',
            'email' => 'pustakawan@unsur.ac.id',
        ])
        ->assignRole('pustakawan')
        ->givePermissionTo(['edit_book','edit_user']);

        User::factory()->create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@unsur.ac.id',
        ])
        ->assignRole('mahasiswa')
        ->givePermissionTo('view_book');
    }
}
