<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'config_id',
        'hospital_id',
    ];

    public function config()
    {
        return $this->belongsTo(Config::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function tree()
    {
        return $this->hasMany(Tree::class);
    }

    public function position()
    {
        return $this->hasMany(Position::class);
    }

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }

    public function demand()
    {
        return $this->hasMany(Demand::class);
    }

    public function caregiver()
    {
        return $this->hasMany(Caregiver::class);
    }
}
