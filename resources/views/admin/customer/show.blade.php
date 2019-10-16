@extends('layouts.app')

@section('content')


    <div class="container">
        <h1 class="btn-primary"><b>Information of Customer</b></h1>

        <table class="table" border="8" bgcolor="#6495ed">
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
            <tr>
                <td><b>{{$customer->id}}</b></td>
                <td><b><h4>{{$customer->name}}</h4></b></td>
                <td><b>{{$customer->email}}</b></td>
                <td><b>{{$customer->address}}</b></td>
                <td><b>{{$customer->phone}}</b></td>
                <td><b>{{$customer->gender}}</b></td>
                <td><img src="{{ asset('storage'. $customer->image) }}" alt="" style="width: 150px"></td>
            </tr>

        </table>
        <br>
        <a href="{{route('customers.index')}}" class="btn btn-success"><b>Back To Page List Of Customer</b></a>
        <a href="https://vi.wikipedia.org/wiki/Cristiano_Ronaldo" class="btn btn-primary">Detail Customer</a>
    </div>
@endsection
