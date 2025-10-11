<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //1人のユーザーが多くのpostをする
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
