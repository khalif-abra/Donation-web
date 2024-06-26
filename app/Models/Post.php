<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body', 'slug'];
    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    public function Category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Photos() {
        return $this->hasMany(Photo::class);
    }

    // public function author()
    // {
    //     return $this->belongsTo(Author::class, 'user_id');
    // }
}
