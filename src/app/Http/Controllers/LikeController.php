<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Post;
use app\models\Like;
use Illuminate\support\facades\auth;

class LikeController extends Controller
{
    //いいね機能
    public function toggle(Post $post)
    {

        if (Auth::check()) {

            $user = Auth::user();

            $Isliked = $user->likes->where('post_id', $post->id);

            if (!$Isliked->exists()) {

                $like = new Like();
                $like->post_id = $post->post_id;
                $like->item_id = $post->item_id;
                $like->id = $user->id;
                $like->save();
            } else {

                $Isliked->delete();
            }
        }

        return back();
    }
}
