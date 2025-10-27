<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['email', 'password', 'user_name', 'user_image', 'postcode', 'address', 'building'];
    protected $guarded = ['id'];

    //これがないとupdate_atがないというエラー(column not found)が発生する
    public $timestamps = false;

    public function posts()
    {
        //1人のuserは複数のpostを投稿する
        $this->hasMany(Post::class);
    }

    public function likes()
    {
        //1人userは複数のpostにlikeする
        $this->belongsToMany(Post::class);
    }
}
