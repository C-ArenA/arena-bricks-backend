<?php

namespace Database\Seeders;

use App\Models\Brick;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brick::create([
            'name' => 'Ladrillo Popular',
            'description' => 'Ladrillo cerámico de 6 huecos, rayado, no portante, para uso de relleno',
            'length_mm' => 235,
            'height_mm' => 140,
            'width_mm' => 95
        ]);
        Brick::create([
            'name' => 'Ladrillo Estándar',
            'description' => 'Ladrillo cerámico de 6 huecos, rayado, no portante, para uso de relleno',
            'length_mm' => 240,
            'height_mm' => 150,
            'width_mm' => 100
        ]);
        Brick::create([
            'name' => 'Ladrillo Nuevo',
            'description' => 'Ladrillo cerámico de 6 huecos, rayado, no portante, para uso de relleno',
            'length_mm' => 230,
            'height_mm' => 140,
            'width_mm' => 90
        ]);
    }
}
