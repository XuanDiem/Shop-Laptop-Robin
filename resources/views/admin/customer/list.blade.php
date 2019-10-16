{{--<link rel="stylesheet" href="{{'layouts/app.blade.php'}}">--}}
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="btn-primary"><b>List Of Customer</b></h1>
        @if(Session::has('action-success'))
            <h2>{{ Session::get('action-success')}}</h2>
        @endif

        @if(isset($message))
            <h2>{{ $message }}</h2>
        @endif
        <table class="table" border="8" bgcolor="#f0f8ff">
            <thead class="thead-dark" align="center">
            <tr>
                <th scope="col"><b>Id</b></th>
                <th scope="col"><b>Name</b></th>
                <th scope="col"><b>Email</b></th>
                <th scope="col"><b>Address</b></th>
                <th scope="col"><b>Phone</b></th>
                <th scope="col"><b>Gender</b></th>
                <th scope="col"><b>Image</b></th>
                @can('crud-users')
                    <th scope="col" colspan="3"><b>Options</b></th>
                @endcan

            </tr>
            </thead>
            <tbody>
            @if(count($customers) == 0)
                <tr>
                    <td colspan="8">
                        <b>Sorry ! No Data :( Please input data !</b>
                    </td>
                </tr>
            @else
                @foreach($customers as $key => $customer)
                    <tr>
                        {{--<td>{{++$key}}</td>--}}
                        <td><b>{{$customer->id}}</b></td>
                        <td><b><h4>{{$customer->name}}</h4></b></td>
                        <td><b>{{$customer->email}}</b></td>
                        <td><b>{{$customer->address}}</b></td>
                        <td><b>{{$customer->phone}}</b></td>
                        <td><b>{{$customer->gender}}</b></td>
                        <td><img src="{{ asset('storage'. $customer->image) }}" alt="" style="width: 150px">
                        </td>
                        @can('crud-users',$customer->id)
                            <td>
                                <a href="{{route('customers.show',$customer->id)}}" class="btn btn-primary"><b>Show</b></a>
                            </td>
                            <td>
                                <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-success"><b>Edit</b></a>
                            </td>
                            <td>
                                <form action="{{route('customers.destroy',$customer->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn định xóa thật à ???  :(')">Delete
                                    </button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <a href="{{route('customers.create')}}" class="btn btn-success"><b>Add A Customer</b></a>
        <a href="{{route('users.index')}}" class="btn btn-primary"><b>View List Users</b></a>
        <a href="{{route('bills.index')}}" class="btn btn-success">View List Bills</a>
    </div>

@endsection
