@extends('layouts.app')
@section('content')
    @if(Session::has('success'))
        <div>
            <h2 class="alert-danger">{{Session::get('success')}}</h2>
        </div>
    @endif
    <div><img src="{{asset('storage/images/laptop1.gif')}}" alt="" width="100%" height="500px"></div>
    <br>
    <h1><b style="color: cornflowerblue"> . . . . . . </b></h1>
    <br>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="container">

        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="">
                                <img class="pic-1" src="{{ asset('storage'.$product->image) }}">
                            </a>
                            <ul class="social">
                                {{--<li><a href="{{route('detail',$product->id)}}" data-tip="Quick View"><iclass="fa fa-search"></i></a></li>--}}

                                <li>
                                    <form action="{{route('detail',$product->id)}}" method="get" data-tip="Quick View">
                                        <button class="btn btn-dark fa fa-search" type="submit"></button>
                                    </form>
                                </li>
                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>

                                {{--<li><a href="{{route('changeCart',$product->id)}}" data-tip="Add to Cart"><i--}}
                                {{--class="fa fa-shopping-cart"></i></a></li>--}}
                                <li>
                                    <form action="{{route('changeCart',$product->id)}}" method="post"
                                          data-tip="Add to Cart">
                                        @csrf
                                        <button class="btn btn-dark fa fa-shopping-cart" type="submit"></button>
                                    </form>
                                </li>
                            </ul>
                            <span class="product-new-label">Sale</span>
{{--                            <span class="product-discount-label">20%</span>--}}
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star disable"></li>
                        </ul>
                        <div class="product-content">
                            <h1 class="title"><a href="#"><b>{{$product->name}}</b></a></h1>
                            <div class="price">{{number_format($product->price).' VNĐ'}}
                                <span>$15.000.000 VNĐ</span>
                            </div>
                            <form action="{{route('changeCart',$product->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger fa fa-shopping-cart" type="submit"> Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
