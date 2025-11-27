<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\auth;
use App\Models\Comment;
use App\Models\User;

class CommentController extends Controller
{
    public function comment(Request $request)
    {

        $user = Auth::user();
        $check_comment = Comment::where('item_id', $request->item_id)->where('user_id', $user->id)->exists();
        //dd($check_comment);
        if (!$check_comment) {

            $comment = new Comment();
            $comment_user = User::find($user->id);



            $comment->user_id = $comment_user->id;
            $comment->user_name = $comment_user->user_name;
            $comment->user_image = $comment_user->user_image;
            $comment->item_id = $request->item_id;
            $comment->comment = $request->come;

            //dd($comment);
            $comment->save();
        }

        $comments = Comment::where('item_id', $request->item_id)->get();

        return back()->with('comments', $comments)->with('check_comment', $check_comment);
    }
}
