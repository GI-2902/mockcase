<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\Like;
use app\Models\Post;

class LikeController extends Controller
{

    //いいね機能
    public function likePost(Post $post)
    {
        //現在ログインしているユーザーのID取得
        $user_id = Auth::id();

        $liked_post = $post->likes()->where('user_id', $user_id);

        if (!$liked_post->exists()) {

            //laravelは「Like」インスタンスで「Likes」テーブルが操作できる
            $like = new Like();
            $like->user_id = $user_id;
            $like->post_id = $post->id;
            $like->save();
        } else {
            $liked_post->delete();
        }

        //likesテーブル?を呼び出していいねpostの数をカウント
        $likes_count = $post->likes->count();

        return (string) $likes_count;
    }
}
