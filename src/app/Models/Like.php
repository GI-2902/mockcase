<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    //これがないとupdate_atがないというエラー(column not found)が発生する
    public $timestamps = false;

    public $primaryKey = 'post_id';

    protected $keyType = 'int';

    public $incrementing = false;

    public function users()
    {
        //1つのlikeは1人のユーザーに紐づく
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        //1つのlikeは1人のitemに紐づく
        return $this->belongsTo(Item::class);
    }
}
