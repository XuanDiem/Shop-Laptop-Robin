<link rel="stylesheet" href="{{'layouts/app.blade.php'}}">
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="btn-primary"><b>List Employees</b></h1>
        <table class="table" border="8" bgcolor="#fff0f5">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>Id</b></th>
                <th scope="col"><b>Name</b></th>
                <th scope="col"><b>Email</b></th>
                <th scope="col"><b>Address</b></th>
                <th scope="col"><b>Phone</b></th>
                <th scope="col"><b>Gender</b></th>
                <th scope="col"><b>Image</b></th>
            </tr>
            </thead>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->address}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>{{$employee->gender}}</td>
                    <td><img src="{{asset('storage'.$employee->image)}}" alt="" width="150px"></td>
                </tr>

            @endforeach

        </table>
        <a href="{{route('customers.index')}}" class="btn btn-primary">View List Customers</a>
    </div>

@endsection

