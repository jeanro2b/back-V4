<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'icon',
        'name',
    ];

    public function demand()
    {
        return $this->hasMany(Demand::class);
    }
}
