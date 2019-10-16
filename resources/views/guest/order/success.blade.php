@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 align="center" style="color: red">You Ordered Successfully ! See you again ! Thank you :)</h1>
        <h1 class="btn-primary"><b>Detail Bill</b></h1>
        {{--        <tr>--}}
        {{--            <td><b><span style="color:red"><h2 align="center">Customer: {{$bill->customer->name}}</h2></span></b></td>--}}
        {{--            <td><b><span style="color:red"><h3 align="center">ID Customer: {{$bill->customer->id}}</h3></span></b></td>--}}
        {{--        </tr>--}}
        <table class="table" border="8" bgcolor="#fff0f5">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>Name Customer</b></th>
                <th scope="col"><b>Email</b></th>
                <th scope="col"><b>Address</b></th>
                <th scope="col"><b>Phone</b></th>
                <th scope="col"><b>Price Product</b></th>
                <th scope="col"><b>Amount Products</b></th>
                <th scope="col"><b>Name Products</b></th>
            </tr>
            </thead>
            <tr>
                <td><b><h4>{{$guest->name}}</h4></b></td>
                <td><b><h4>{{$guest->email}}</h4></b></td>
                <td><b>{{$guest->address}}</b></td>
                <td><b>{{$guest->phone}}</b></td>
                <td><b>{{number_format(Session::get('cart')->totalPrice)}}</b></td>
                <td><b>{{Session::get('cart')->totalAmount}}</b></td>
                <td>@foreach($array as $item)

                        <b>{{$item['item']->name}}<br></b>
                        <b><img src="{{asset(''.$item['item']->image)}}" alt="" width="150px"><br></b>
                    @endforeach</td>
            {{--@dd($array)--}}
            </tr>
        </table>


        <br>
        <img src="{{asset('phe.gif')}}" alt="" width="150px">
        <img src="{{asset('hahaha.gif')}}" alt="" width="150px">
        <br>
        <a href="{{route('home')}} " class="btn btn-success">Back To Home Page </a>
    </div>
@endsection


