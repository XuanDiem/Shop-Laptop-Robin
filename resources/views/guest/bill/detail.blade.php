@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="btn-primary"><b>Detail Bill</b></h1>
        {{--        <tr>--}}
        {{--            <td><b><span style="color:red"><h2 align="center">Customer: {{$bill->customer->name}}</h2></span></b></td>--}}
        {{--            <td><b><span style="color:red"><h3 align="center">ID Customer: {{$bill->customer->id}}</h3></span></b></td>--}}
        {{--        </tr>--}}
        <table class="table" border="8" bgcolor="#fff0f5">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>Id Bill</b></th>
                <th scope="col"><b>Date Buy</b></th>
                <th scope="col"><b>Id Product</b></th>
                <th scope="col"><b>Name Product</b></th>
                <th scope="col"><b>Price Product</b></th>
                <th scope="col"><b>Amount Products</b></th>
                <th scope="col"><b>Image Product</b></th>
            </tr>
            </thead>
            {{--            @dd($bills)--}}
            @foreach($bills as $product)
                {{--                <td><b>{{$bills->id}}</b></td>--}}
                {{--                <td><b>{{$bills->date_pay}}</b></td>--}}
                <tr>
                    <td><b><h4>{{$product->id}}</h4></b></td>
                    <td><b><h4>{{$product->name}}</h4></b></td>
                    <td><b>{{number_format($product->price)}}</b></td>
                    <td><b>{{$product->total}}</b></td>
                    <td align="center"><img src="{{asset('storage'. $product->image)}}" alt="" width="250px"></td>
                </tr>
            @endforeach
        </table>
        <a href="{{route('bills.index')}}" class="btn btn-success">Back To Page List Bills</a>
        <a href="" class="btn btn-info">Add Product</a>
    </div>
@endsection

