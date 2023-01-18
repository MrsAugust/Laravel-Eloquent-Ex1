<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'category_id',
    ];

    /**
     * Get the details of the category
     */
    public function categories()
    {
        return $this->hasMany(Categories::class, 'foreign_key');
    }

    public function posts()
    {
        return $this->hasMany(Posts::class, 'foreign_key');
    }
}
