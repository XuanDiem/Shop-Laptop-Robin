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
                            {{--                            {{ var_dump(Session::get('cart')) }}--}}
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
{{--    @dd(Session::get('cart'))--}}
@endsection

