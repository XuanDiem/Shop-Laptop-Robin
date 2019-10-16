@extends('layouts.app')
<link rel="stylesheet" href="{{'layouts/app.blade.php'}}">
@section('content')
    <div class="container">
        <h1 class="btn-primary"><b>List Bills</b></h1>

        <table class="table" border="10" bgcolor="#add8e6">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>Id Bill</b></th>
                <th scope="col"><b>Customer Name</b></th>
                <th scope="col"><b>Total Money</b></th>
                <th scope="col"><b>Amount Products</b></th>
                <th scope="col"><b>Options</b></th>
            </tr>
            </thead>
            <tbody>
            @if(count($bills)== 0)
                <tr>
                    <td colspan="8">
                        <b>Sorry ! No Data :( Please input data !</b>
                    </td>
                </tr>
            @else
                @foreach($bills as $key => $bill)
                    <tr>
                        <td align="center">{{$bill->id}}</td>
                        <td align="center"><b><h4>{{$bill->customer['name']}}</h4></b></td>
                        <td align="center"><b>{{number_format($bill->totalPrice)}}</b></td>
                        <td align="center">{{$bill->products->count()}}</td>
                        {{--<td align="center">{{$bill->products->total()}}</td>--}}
                        @can('crud-users',$bill->id)
                            <td align="center">
                                <form action="{{route('bills.destroy',$bill->id)}}" method="post">
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="{{route('bills.show',$bill->id)}}" class="btn btn-success">Show Detail</a>
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn chắc chắn muốn xóa chứ ! ahuhu :(')">Delete
                                    </button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <a href="{{route('customers.index')}}" class="btn btn-success">View List Customers</a>
        <a href="{{route('products.index')}}" class=" btn btn-primary">View List Products</a>
    </div>
@endsection

