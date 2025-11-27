<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'item_id',
        'category_name',
        'item_image',
        'brand',
        'price',
        'status',
        'description',
        'comment',
    ];

    public $primaryKey = 'id';
}
