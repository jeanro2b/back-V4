<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'communication',
        'information',
        'hospiteam',
        'name',
    ];

    public function department()
    {
        return $this->hasMany(Department::class);
    }
}
