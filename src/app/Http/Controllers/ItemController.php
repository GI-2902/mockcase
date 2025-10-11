<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
//DBファサードを使用する
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {

        $items = DB::table('items')->get();

        //dd($items);

        return view('index', compact('items'));
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
