<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admins = [
            [
                'name' => 'nasywaraichanah',
                'nim' => 'L0122121',
                'password' => Hash::make('admin123'),
            ],
            [
                'name' => 'widyakhoirunnisa',
                'nim' => 'L0122152',
                'password' => Hash::make('admin123'),
            ],
        ];

        foreach ($admins as $admin) {
            Admin::updateOrCreate(['nim' => $admin['nim']], $admin);
        }
    }
}
