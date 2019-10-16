@extends('layouts.app')
@section('content')
    @if(Session::has('success'))
        <div>
            <h2 class="alert-danger">{{Session::get('success')}}</h2>
        </div>
    @endif
    <div class="container">
        <h1 class="btn-primary"><b>Detail Product</b></h1>

        <table class="table" border="8" bgcolor="#6495ed">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>Id</b></th>
                <th scope="col"><b>Image</b></th>
                <th scope="col"><b>Name</b></th>
                {{--<th scope="col"><b>Amount</b></th>--}}
                <th scope="col"><b>Price</b></th>
            </tr>
            </thead>
            <tr>
                <td><b>{{$product->id}}</b></td>
                <td><img src="{{ asset(''. $product->image) }}" alt="" style="width: 150px"></td>
                <td><b><h4>{{$product->name}}</h4></b></td>
                {{--<td><b>{{$product->amount}}</b></td>--}}
                <td><b>{{number_format($product->price)}}</b></td>
            </tr>
            <a href="{{route('cart.add',$product->id)}}" class="btn btn-danger fa fa-shopping-cart"><h1>Buy Now</h1></a>
{{--                        <form action="{{route('changeCart',$product->id)}}" method="post">--}}
{{--                            @csrf--}}
{{--                            @dd($product)--}}
{{--                            <button class="btn btn-danger fa fa-shopping-cart" type="submit"><h1>Buy Now</h1></button>--}}
{{--                        </form>--}}
        </table>
        <br>
        <a href="{{route('customers.index')}}" class="btn btn-success"><b>Back To Page List Of Customer</b></a>
        <a class="btn btn-danger" href="{{route('cart.index')}}"><b>Next to Cart</b></a>
    </div>
@endsection

