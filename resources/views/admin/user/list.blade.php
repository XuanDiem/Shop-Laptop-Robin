@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table" border="6" style="background: peachpuff">
            <thead align="center" class="thead-dark">
            <tr>
                <h1 class="btn-success"><b>List Users</b></h1>
                <th scope="col"><b>Id</b></th>
                <th scope="col"><b>Name</b></th>
                <th scope="col"><b>Email</b></th>
{{--                <th scope="col"><b>Password</b></th>--}}
                <th scope="col" colspan="2"><b>Options</b></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <th scope="row">{{$user['id']}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
{{--                    <td>{{$user['password']}}</td>--}}
                    @can('crud-users', $user->id)
                        <td>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        {{--@if($user->id === Auth::user()->id)--}}
                        <td>
                            <form action="{{route('users.update',$user->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                        onclick="return(confirm('Are you sure ?  :(('))">Delete
                                </button>
                            </form>
                        </td>
                    @endcan
                    {{--@endif--}}
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{route('customers.index')}}" class="btn btn-primary"><b>View List Of Customers</b></a>

    </div>
@endsection
