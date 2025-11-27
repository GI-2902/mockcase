<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\support\facades\auth;

class LikeController extends Controller
{
    //いいね機能
    public function toggle(Request $request)
    {

        $user = Auth::user();

        $check_like = Like::where('user_id', $user->id)->where('item_id', $request->item_id)->exists();
        //dd($request);
        if (!$check_like) {

            $like = new Like();
            $like->item_id = $request->item_id;
            $like->user_id = $user->id;
            //dd($like);
            $like->save();
        } else {

            //getだと複数のmodelを格納するcollectionクラスになるのでforeachで1つに取り出す
            Like::where('user_id', $user->id)->where('item_id', $request->item_id)->delete();
        }

        $count = Like::count();
        //dd($count);
        return back()->with('count', $count)->with('check_like', $check_like);
    }
}
