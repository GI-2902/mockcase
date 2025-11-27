@extends('layouts.app')

    @section('css')
    <link rel="stylesheet" href="{{asset('css/sell.css')}}">
    @endsection

    @section('title')
    <title>商品出品画面-ログイン後-</title>
    @endsection

    @section('content')

    <main>
        <form action="" class="sell" method="post" enctype="multipart/form-data">
            @csrf
            <div class="sell_title">
                商品の出品
            </div>
            <div class="sell_image">
                <div class="sell_image_title">
                    商品画像
                </div>
                <div class="sell_image_pic">
                    <label for="image">画像を選択する</label>
                    <input type="file" id="image" />
                </div>
            </div>
            <div class="sell_status">
        
                <div class="sell_status-title">
                    商品の詳細
                </div>
                <div class="sell_status-category">
                    <div class="sell_status-category-title">
                        カテゴリー
                    </div>
                    <div class="sell_status-category-tag">
                        <ul> 
                            <a href="{{ route('category',['category_name' => 'ファッション','item_id' => $item->item_id])}}">ファッション</a>
                            <a href="{{ route('category',['category_name' => '家電','item_id' => $item->item_id])}}">家電</a>
                            <a href="">インテリア</a>
                            <a href="">レディース</a>
                            <a href="">メンズ</a>
                            <a href="">コスメ</a>
                            <a href="">本</a>
                            <a href="">ゲーム</a>
                            <a href="">スポーツ</a>
                            <a href="">キッチン</a>
                            <a href="">ハンドメイド</a>
                            <a href="">アクセサリー</a>
                            <a href="">おもちゃ</a>
                            <a href="">ベビー・キッズ</a>
                        </ul>
                    </div>
                </div>
                <div class="sell_status-type">
                    <div class="sell_status-type-title">
                        商品の状態
                    </div>
                    <select name="status" class="sell_status-type-select">
                        <option value="良好">良好</option>
                        <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                        <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                        <option value="状態が悪い">状態が悪い</option>
                    </select>
                </div>
            </div>
        
            <div class="sell_text">
                商品名と説明
            </div>
            <div class="sell_name">
                <div class="sell_name-title">
                    商品名
                </div>
                <input type="text" class="sell_name-input" name="item_name">
            </div>
            <div class="sell_brand">
                <div class="sell_brand-title">
                    ブランド名
                </div>
                <input type="text" class="sell_brand-input" name="brand">
            </div>
            <div class="sell_descri">
                <div class="sell_descri-title">
                    商品の説明
                </div>
                <textarea class="sell_descri-input" name="description"></textarea>
            </div>
            <div class="sell_price">
                <div class="sell_price-title">
                    販売価格
                </div>
                <input type="text" class="sell_price-input" name="price" placeholder="￥">
            </div>
            <button type="submit" class="sell_button">
                出品する
            </button>
        </form>
       
    </main>
    @endsection