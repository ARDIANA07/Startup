<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'kode' => 'BT-01',
            'name' => 'Batik Solo',
            'harga' => '50.000-70.000',
            'foto' => 'foto.jpg'
        ]);
        Category::factory()->create([
            'kode' => 'BT-02',
            'name' => 'Batik jogja',
            'harga' => '60.000-100.000',
            'foto' => 'foto.jpg'
        ]);
    }
}