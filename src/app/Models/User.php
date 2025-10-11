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
}
