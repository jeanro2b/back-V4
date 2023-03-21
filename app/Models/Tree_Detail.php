<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree_Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'tree_id',
        'name',
        'emergency',
        'going_coming',
        'icon',
        'order',
        'parentId',
        'priority',
        'slug',
        'leaf'
    ];

    public function tree()
    {
        return $this->belongsTo(Tree::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
