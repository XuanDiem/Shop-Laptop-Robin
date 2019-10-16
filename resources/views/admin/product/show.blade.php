@extends('layouts.app')

@section('content')


    <div class="container">
        <h1 class="btn-primary"><b>Information of Product</b></h1>

        <table class="table" border="8" bgcolor="#6495ed">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>Id</b></th>
                <th scope="col"><b>Name</b></th>
                <th scope="col"><b>Price</b></th>
                <th scope="col"><b>Amount</b></th>
                <th scope="col"><b>Image</b></th>
            </tr>
            </thead>
            <tr>
                <td><b>{{$product->id}}</b></td>
                <td><b><h4>{{$product->name}}</h4></b></td>
                <td><b>{{number_format($product->price)}}</b></td>
                <td><b>{{$product->amount}}</b></td>
                <td><img src="{{ asset(''. $product->image) }}" alt="" style="width: 150px"></td>
            </tr>
{{--            <a class="btn btn-danger" href="{{route('add',$product->id)}}"><h1>Add to Cart</h1></a>--}}
        </table>
        <br>
        <a href="{{route('customers.index')}}" class="btn btn-success"><b>Back To Page List Of Customer</b></a>
{{--        <a class="btn btn-primary" href="{{route('index')}}"><b>Next to Cart</b></a>--}}
    </div>
@endsection

