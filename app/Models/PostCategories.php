<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
    use HasFactory;

    /**
     * Get the details of the category
     */
    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'categories','foreign_key');
    }

    public function posts()
    {
        return $this->hasOne(Posts::class, 'foreign_key');
    }
}
