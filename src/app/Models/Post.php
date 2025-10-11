<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //1つのpostに無数のユーザーがいいねする
    public function likes()
    {
        return $this->hasMany(User::class);
    }
}
