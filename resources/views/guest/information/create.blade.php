@extends('layouts.app')
@section('content')

    <div class="container">
        <h2><span style="color: red">You need create information before buy product !</span></h2>
        <h1 class="btn-primary"><b>Create Information Customer</b></h1>

        <form action="{{ route('pay.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table" border="2" bgcolor="#32cd32">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" size="30" placeholder="Enter your name in the box !">
                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </td>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" size="30" placeholder="Enter your email in the box !">
                        @if($errors->has('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" size="30" placeholder="Enter your address in the box !">
                        @if($errors->has('address'))
                            <span class="text-danger">{{$errors->first('address')}}</span>
                        @endif</td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone" size="30" placeholder="Enter your phone in the box !">
                        @if($errors->has('phone'))
                            <span class="text-danger">{{$errors->first('phone')}}</span>
                        @endif</td>
                </tr>
                <td>Gender:</td>
                <td>
                    <select name="gender">
                        <option></option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                        <option></option>
                    </select>
                    @if($errors->has('gender'))
                        <span class="text-danger">{{$errors->first('gender')}}</span>
                    @endif</td>
                </td>
                </tr>
                <tr>
                    <td>Name Product:</td>
                    <td>@foreach($cart->items as $product)
                            {{$product['item']->name ."."}}<br>
                        @endforeach</td>
                </tr>
                <tr>
                    <td>Total Products:</td>
                    <td>{{Session::get('cart')->totalAmount}}</td>
                </tr>
                <tr>
                    <td>Total Price:</td>
                    <td>{{number_format(Session::get('cart')->totalPrice)}}</td>
                </tr>
                <br>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-warning"  onclick="@if(Session::get('cart')->totalAmount==0)
                            alert('Bạn chưa có sản phẩm nào trong giỏ hàng !');
                        @endif"><b>Submit</b></button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
