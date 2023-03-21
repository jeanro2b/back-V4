<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'logoURL',
        'name',
    ];

    public function position()
    {
        return $this->hasMany(Position::class);
    }

    public function department()
    {
        return $this->hasMany(Department::class);
    }

    public function caregiver()
    {
        return $this->hasMany(Caregiver::class);
    }
}
