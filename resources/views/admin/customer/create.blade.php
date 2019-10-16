@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 class="btn-primary"><b>Create New Customer</b></h1>

        <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
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
                <tr>
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
                    <td>Image:</td>
                    <td><input type="text" id="images" name="images" size="30" placeholder="File Name !">
                        @if($errors->has('image'))
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif</td>
                    <td><input type="file" id="image" name="image" value="image" size="30"></td>
                </tr>

                <tr>
                    <td>Id employee:</td>
                    <td><select name="employee_id">
                            <option></option>
                            @foreach($employees as $employee )
                                <option> {{$employee->id}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('employee_id'))
                            <span class="text-danger">{{$errors->first('employee_id')}}</span>
                        @endif</td>
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
        <a href="{{route('customers.index')}}" class="btn btn-primary">Back Page List Of Customers</a>
    </div>
@endsection
