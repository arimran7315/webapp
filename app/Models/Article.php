<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
