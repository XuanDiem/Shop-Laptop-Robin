@extends('layouts.app')
@section('content')
    <script type="text/javascript" src="{{ asset('js/increase_decrease.js') }}"></script>

    @if(Session::has('success'))
        <div>
            <h2 class="alert-danger">{{Session::get('success')}}</h2>
        </div>
    @endif
    <div class="container">
        <h1 class="btn-success"><b>@lang('changeLanguage.detail-cart')</b></h1>

        <table class="table" border="8" bgcolor="#6495ed">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>@lang('changeLanguage.name')</b></th>
                <th scope="col"><b>@lang('changeLanguage.price')</b></th>
                <th scope="col" colspan="4"><b>@lang('changeLanguage.options')</b></th>
            </tr>
            </thead>
            @if($cart)
                {{-- @dd($cart)--}}
                @foreach($cart->items as $product)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-2 hidden-xs"><img
                                        src="{{ asset(''. $product['item']->image) }}"
                                        alt="..."
                                        class="img-responsive" width="140%"/></div>
                                <div class="col-md-10">
                                    <h4 class="nomargin">{{ $product['item']->name }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{ number_format($product['item']->price).'VNĐ' }}</td>
                        {{--<td data-th="Quantity">--}}
                        {{--<input type="number" class="form-control text-center" min="1" name="amount"--}}
                        {{--value="{{ $product['amount']}}">--}}
                        {{--</td>--}}

                        <td>
                            <form action="{{route('changeCart',$product['item']->id)}}" method="post">
                                @csrf
                                <button type="submit" onclick="return decreaseQty({{$product['item']->id}})"
                                        class="btn btn-outline-success">-
                                </button>
                                <input type="text" id="{{$product['item']->id.'quantity'}}"
                                       value="{{$product['amount']}}" name="quantity" min="1" max="100" size="5px"
                                       class="btn btn-outline-primary">
                                <button type="submit" onclick="return increaseQty({{$product['item']->id}})"
                                        class="btn btn-outline-success">+
                                </button>
                            </form>
                        </td>
                        <td><a class="btn btn-danger"
                               href="{{route('cart.delete',$product['item']->id)}}">@lang('changeLanguage.remove')</a>
                        </td>
                    </tr>

                @endforeach
            @endif
        </table>
        <table border="2">
            <td class="hidden-xs text-center"><strong>Tổng tiền: {{ number_format($cart->totalPrice) }}</strong></td>
        </table>
        <br>
        @if($cart->totalPrice > 0)
            <a href="{{route('pay.create')}}" class="btn btn-primary"> Payment of products</a>
        @else
            <div align="center">
                <img src="{{asset('ahihi.gif')}}" alt="" width="20%">
                <h1>Không có sản phẩm nào trong giỏ hàng của bạn :(</h1>
                <a href="{{route('home')}}" class="btn btn-warning">Tiếp tục mua sắm :)</a>
            </div>
        @endif
    </div>
@endsection


{{--@extends("layouts.app")--}}

{{--@section("content")--}}
{{--    <div class="container" style="background-color: #b9bbbe">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8" style="">--}}
{{--                @if(\Illuminate\Support\Facades\Session::has('cart'))--}}

{{--                    @foreach($cart->items as $product)--}}
{{--                        <div class="col" style="border: 1px solid #494f54">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col" style="padding: 20px">--}}
{{--                                    <img src="{{ asset('storage/'.$product['item']->image) }}" alt="" width="100px">--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <p>{{ $product['item']->name }}</p>--}}
{{--                                    <p>{{__('cart_index.provider')}} <a href="{{ route('home') }}">Laptop Shop Robin Diem</a></p>--}}
{{--                                    <p>--}}
{{--                                        <a href="{{route('cart.delete',$product['item']->id)}}">@lang('changeLanguage.remove')</a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="col" style="">--}}
{{--                                    <strong>--}}
{{--                                        <h3><p>{{ number_format($product['price']).' VND' }}</p></h3>--}}
{{--                                    </strong>--}}
{{--                                    <form action="{{ route('changeCart',$product['item']->id) }}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <button type="submit" onclick="return decreaseQty({{$product['item']->id}})">--}}
{{--                                            ---}}
{{--                                        </button>--}}
{{--                                        <span--}}
{{--                                            class="input-group mb-3"--}}
{{--                                            style="display: none;"></span>--}}
{{--                                        <input id="{{$product['item']->id.'quantity'}}" type="tel" name="quantity"--}}
{{--                                               value="{{ $product['amount'] }}"--}}
{{--                                               min="1" max="100">--}}
{{--                                        <button type="submit" onclick="return increaseQty({{$product['item']->id}})">--}}
{{--                                            +--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="col-md-4">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-7 text-md-left" style="padding: 10px;">--}}
{{--                        {{__('cart_index.calculateProvisional')}}--}}
{{--                    </div>--}}
{{--                    <div class="col text-md-right"--}}
{{--                         style="padding: 10px">@if(\Illuminate\Support\Facades\Session::has('cart'))--}}
{{--                            <p><strong>{{ number_format($cart->totalPrice).' VND' }}</strong></p>@endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-7 text-md-left" style="padding: 10px;">--}}
{{--                        {{__('cart_index.totalQty')}}--}}
{{--                    </div>--}}
{{--                    <div class="col text-md-right"--}}
{{--                         style="padding: 10px">@if(\Illuminate\Support\Facades\Session::has('cart'))--}}
{{--                            <p><strong>{{ $cart->totalAmount}}</strong></p>@endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-7 text-md-left" style="padding: 10px;">--}}
{{--                        {{__('cart_index.totalPrice')}}--}}
{{--                    </div>--}}
{{--                    <div class="col text-md-right"--}}
{{--                         style="padding: 10px">@if(\Illuminate\Support\Facades\Session::has('cart'))--}}
{{--                            <p><strong>{{ number_format($cart->totalPrice).' VND' }}</strong></p>@endif</div>--}}
{{--                </div>--}}
{{--                <div class="row" style="padding: 10px;">--}}
{{--                    <div class="col-md-2">--}}
{{--                        <a href="/home/check-out" class="btn btn-danger"--}}
{{--                           style="width: 300px">{{__('cart_index.checkOut')}}</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
