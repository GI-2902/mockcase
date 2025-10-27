<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function users()
    {
        //1つのpostは1人のユーザーに紐づく
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        //1つのpostは複数のいいねを得る
        return $this->belongsToMany(User::class);
    }
}
