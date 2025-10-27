<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Like;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function favorite(Post $post)
    {


        $user = Auth::user();

        $Isliked = $user->likes->where('post_id', $post->id)->exists();

        if (!$Isliked) {
            $like = new Like();
            $like->post_id = $post->post_id;
            $like->id = $user->id;
            $like->item_id = $post->item_id;
            $like->save();
        }

        return back();
    }
}
