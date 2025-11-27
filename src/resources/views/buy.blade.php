@extends('layouts.app')

    @section('css')
    <link rel="stylesheet" href="{{asset('css/buy.css')}}">
    @endsection
    @section('title')
    <title>商品購入画面-ログイン後-</title>
    @endsection

    @section('content')
    <div class="item">
    
        <div class="item_buy">

            <div class="item_buy_info">

                <div class="item_buy_info-pic">
                    <img src="{{asset('storage/image/'. $item->item_image)}}" alt="">
                </div>
                <div class="item_buy_info-text">
                    <div class="item_buy_info-text-title">
                        {{ $item->item_name}}
                    </div>
                    <div class="item_buy_info-text-price">
                        ￥{{ $item->price}}
                    </div>
                </div>

            </div>

            <div class="item_buy_pay">
                <div class="item_buy_pay-title">
                    支払い方法
                </div>
                <div class="item_buy_pay-howto">
                    
                  
                    <select name="version">
    
                        <option value="コンビニ" @selected(old('version') == 'コンビニ')>
                            コンビニ 
                         </option>
                         <option value="カード" @selected(old('version') == 'カード')>
                            カード 
                         </option>


                    </select>
               


                    {{--<select name="payment" >
                        <option  value="コンビニ支払い">コンビニ支払い</option>
                        <option  value="カード支払い">カード支払い</option>
                    </select>--}}
                    
                </div>
                
            </div>

            <div class="item_buy_send">
                <div class="item_buy_send-group">
                    <div  class="item_buy_send-group-title">配送先</div>
                    <div class="item_buy_send-group-confirm">変更する</div>
                </div>
                
                <div class="item_buy_send_address">〒xxx</div>
            </div>

        </div>
        <div class="item_conf">

            <div class="item_conf_pay">
                <div class="item_conf_pay_price">
                    <div class="item_conf_pay_price-title">
                        商品代金
                    </div>
                    <div class="item_conf_pay_price-nummber">
                        ￥{{ $item->price}}
                    </div>
                
                </div>
                <div class="item_conf_pay_howto">
                    <div class="item_conf_pay_howto-title">
                        支払い方法
                    </div>
                    <div class="item_conf_pay_howto-select">
                        <a >{{ old('payment')}}</a> 
                    </div>
                
                </div>
            </div>
            <div class="item_conf_button">
                <a href="">購入する</a>
            </div>
        </div>   
    </div>
    @endsection