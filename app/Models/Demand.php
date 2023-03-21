<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'position_id',
        'caregiver_id',
        'patient_id',
        'category_id',
        'comment',
        'status',
        'created_at',
        'take_at',
        'canceled_at',
        'finished_at'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function caregiver()
    {
        return $this->belongsTo(Caregiver::class);
    }
}
