<?php

namespace App\Models;
//DBファサードを使用する
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'item_name',
        'id',
        'item_image',
        'brand',
        'price',
        'status',
        'description',
        'comment',
    ];

    public $primaryKey = 'item_id';

    public $timestamps = false;

    public function likes()
    {
        //1つのitemは複数のいいねを得る
        return $this->belongsToMany(Like::class);
    }

    public function users()
    {
        //1つのitemは1人のユーザーに紐づく
        return $this->belongsTo(User::class);
    }
}
