@extends('layouts.app')
<link rel="stylesheet" href="{{'layouts/app'}}">
@section('content')
    <div class="container">
        <h1 class="btn-primary"><b>List Products</b></h1>
        <table class="table" border="8" bgcolor="#fff0f5">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>Id Product</b></th>
                <th scope="col"><b>Product Name</b></th>
                <th scope="col"><b>Price Product</b></th>
                <th scope="col"><b>Amount Products</b></th>
                <th scope="col"><b>Image Product</b></th>
                <th scope="col" colspan="3"><b>Options</b></th>
            </tr>
            </thead>
            @foreach($products as $product)
                <tr>
                    <td><b>{{$product->id}}</b></td>
                    <td><b><h3>{{$product->name}}</h3></b></td>
                    <td><b>{{number_format($product->price)}}</b></td>
                    <td>{{$product->amount}}</td>
                    <td><img src="{{asset(''.$product->image)}}" alt="" width="250px"></td>
                    <td>
                        <a href="{{route('products.show',$product->id)}}" class="btn btn-primary">Detail</a>
                    </td>
                    @can('crud-products')
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('products.destroy',$product->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Bạn chắc chắn muốn xóa ? :) ahuhu')">Delete
                                </button>
                            </form>
                        </td>
                    @endcan
                </tr>
            @endforeach
        </table>
        <a href="{{route('customers.index')}}" class="btn btn-primary">View List Customers</a>
        @can('crud-products')
            <a href="" class="btn btn-warning">Add New Product</a>
        @endcan
    </div>
@endsection

