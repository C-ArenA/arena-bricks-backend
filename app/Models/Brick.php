<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brick extends Model
{
    /** @use HasFactory<\Database\Factories\BrickFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'length_mm',
        'height_mm',
        'width_mm',
        'is_produced',
    ];
}
