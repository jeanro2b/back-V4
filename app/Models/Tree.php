<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Tree extends Model
{
    use HasFactory;

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'department_id',
    ]; 

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function tree_detail()
    {
        return $this->hasMany(Tree_Detail::class);
    }
  
    public function gategory()
    {
        return $this->hasMany(Category::class);
    }
}
