<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

use Illuminate\Support\Facades\Auth;
use app\Models\User;


class ItemController extends Controller
{
    public function index(Request $request)
    {

        $form = $request->all();
        //model名
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




    public function show(Request $request)
    {

        //getで取得したrequestを変数に代入
        $oneitem = $request->input('item_id');

        //DBから特定の単一レコード取得.get()だと複数データ扱いになるのでfindを使う
        //DB::table()だとstdclassになってeloモデル使えなくてエラーになる
        $item = Item::where('item_id', $oneitem)->first();
        //dd($item);
        //


        return view('item', compact('item'));
    }
}
