@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success m-2">
        <div>{{ $message }}</div>
    </div>
@endif

<div class="container" style="overflow-x:auto;">
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->address_one}}, {{$user->address_two}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="/profile/{{$user->id}}" type="button" class="btn btn-primary">View Full</a>
                <a href="/home/edit/{{$user->id}}" type="button" class="btn btn-primary">Update</a>

                <form action="{{ route('destroy',$user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
