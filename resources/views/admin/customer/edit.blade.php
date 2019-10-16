@extends('layouts.app')

@section('content')


    <div class="container">

        <h1 class="btn-primary"><b>Edit Information Customer</b></h1>

        <form action="{{route('customers.update',$customer->id)}}" method="post">

            @method('put')
            @csrf
            <table class="table"  border="3" bgcolor="#6495ed">
                {{--    <input type="hidden" name="_method" value="put">--}}
                <tr>
                    <td>Id:</td>
                    <td><input type="text" name="id" value="{{$customer->id}}" size="30"
                               placeholder="Enter your id in the box !"></td>
                </tr>

                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="{{$customer->name}}" size="30"
                               placeholder="Enter your name in the box !"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="{{$customer->email}}" size="30"
                               placeholder="Enter your email in the box !"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" value="{{$customer->address}}" size="30"
                               placeholder="Enter your address in the box !"></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone" value="{{$customer->phone}}" size="30"
                               placeholder="Enter your phone in the box !"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="text" name="gender" value="{{$customer->gender}}" size="30"
                               placeholder="Enter  your address in the box !"></td>
                </tr>
                <tr>
                    <td>Image:</td>
                    <td><input type="text" id="images" name="images" value="{{$customer->image}}" size="30"
                               placeholder="File Name !">
                    </td>
                    <td><input type="file" id="image" name="image" value="{{$customer->image}}" size="30">
                    </td>
                </tr>
                <br>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-warning"><b>Submit</b></button>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <a href="{{route('customers.index')}}" class="btn btn-success"><b>Back Page List Of Customer</b></a>
    </div>

@endsection
