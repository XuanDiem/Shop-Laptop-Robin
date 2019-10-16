@extends('layouts.app')

@section('content')



    <div class="container">
        <h1 class="btn-primary"><b>List User</b></h1>

        <form action="{{route('users.update',$user->id)}}" method="post">
            @method('put')
            @csrf
            <table class="table" border="3" bgcolor="#deb887">
                <tr>
                    <td>Id:</td>
                    <td><input type="text" name="id" value="{{$user->id}} " size="30"></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="{{$user->name}}" size="30"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="{{$user->email}}" size="30"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" value="{{$user->password}}" size="30"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <a href="{{route('users.index')}}" class="btn btn-primary">Back To Page List User</a>
    </div>
@endsection
