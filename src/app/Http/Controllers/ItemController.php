<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Category;

class ItemController extends Controller
{
    public function index(Request $request)
    {

        $form = $request->all();

        User::create($form);

        $id = Auth::id();

        $items = Item::where('id', $id)->get();

        //dd($items);

        return view('index', compact('items'));
    }


    public function buy(Request $request)
    {


        //getで取得したrequestを変数に代入
        $oneitem = $request->input('item_id');



        //DBから特定の単一レコード取得.get()だと複数データ扱いになるのでfindを使う
        //DB::table()だとstdclassになってeloモデル使えなくてエラーになる
        $item = Item::where('item_id', $oneitem)->first();
        //dd($item);

        return view('buy', compact('item'));
    }

    public function sell()
    {
        $item = Item::create();
        //dd($item);
        return view('sell', compact('item'));
    }


    public function show(Request $request)
    {

        //getで取得したrequestを変数に代入
        $oneitem = $request->input('item_id');

        //DBから特定の単一レコード取得.get()だと複数データ扱いになるのでfindを使う
        $item = Item::where('item_id', $oneitem)->first();

        $user = Auth::user();

        $like_count = Like::count();

        $comment_count = Comment::where('item_id', $request->item_id)->count();

        $comments = Comment::where('item_id', $request->item_id)->get();

        $check_comment = Comment::where('item_id', $request->item_id)->where('user_id', $user->id)->exists();

        $check_like = Like::where('user_id', $user->id)->where('item_id', $request->item_id)->exists();

        return view('item', compact('item'), compact('comments'))->with('like_count', $like_count)->with('comment_count', $comment_count)->with('check_like', $check_like)->with('check_comment', $check_comment);
    }

    public function category_check(Request $request)
    {

        $item = new Item();

        $item->item_id = $request->item_id;

        //dd($request->category_name);

        $category_check = Category::where('item_id', $request->item_id)->where('category_name', $request->category_name)->exists();

        if ($category_check) {
            Category::where('item_id', $request->item_id)->where('category_name', $request->category_name)->delete();
        } else {
            $category = new Category();
            $category->item_id = $request->item_id;
            $category->category_name = $request->category_name;
            $category->save();
        }
        //dd($category);

        return view('sell', compact('item'));
    }
}
