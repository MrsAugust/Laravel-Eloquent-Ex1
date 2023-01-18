<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'author_id'
    ];

    public function post_categories()
    {

        return $this->hasMany(Categories::class, 'foreign_key');
    }

    public function user()
    {

        return $this->belongsTo(User::class)->withDefault();
    }
}
