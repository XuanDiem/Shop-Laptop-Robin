@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="btn-primary">@lang('changeLanguage.category-products')</h1>
        <table class="table" border="8" bgcolor="#fff0f5">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>@lang('changeLanguage.id')</b></th>
                <th scope="col"><b>@lang('changeLanguage.name')</b></th>
                <th scope="col"><b>@lang('changeLanguage.quantity')</b></th>
            </tr>
            </thead>
            {{--@dd($category )--}}
            @foreach($category as $cate)
                <tr>
                    <td><b><h4>{{$cate->id}}</h4></b></td>
                    <td><b><h4>{{$cate->name}}</h4></b></td>
                    <td><b>{{number_format($cate->sum_amount)}}</b></td>
                    {{--<td align="center"><img src="{{asset('storage'. $product->image)}}" alt="" width="250px"></td>--}}
                </tr>
            @endforeach
        </table>

        <a href="{{route('bills.index')}} " class="btn btn-success">Back To Page List Bills</a>
{{--        <a href="" class="btn btn-info">Add Product</a>--}}
    </div>
@endsection

