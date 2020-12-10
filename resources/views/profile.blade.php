@extends('layouts.app')

@section('content')

<a href="/home" type="button" class="btn btn-primary m-2">Back</a>
<div class="container">
<table>
  <tr>
    <td>First Name</td>
    <td>{{$user->first_name}}</td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>{{$user->last_name}}</td>
  </tr>
  <tr>
    <td>Address</td>
    <td>{{$user->address_one}} <p>{{$user->address_two}}</p></td>
  </tr>
  <tr>
    <td>City</td>
    <td>{{$user->city}}</td>
  </tr>
  <tr>
    <td>State/Province</td>
    <td>{{$user->state}}</td>
  </tr>
  <tr>
    <td>Postal</td>
    <td>{{$user->postal}}</td>
  </tr>
  <tr>
    <td>Country</td>
    <td>{{$user->country}}</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>{{$user->email}}</td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td>{{$user->area_code}} {{$user->phone}}</td>
  </tr>
  <tr>
    <td>Designation</td>
    <td>{{$user->designation}}</td>
  </tr>
  <tr>
    <td>Start Date</td>
    <td>{{$user->start_date}}</td>
  </tr>
  <tr>
    <td>Resume</td>
    <td><a href="{{URL::asset('files/' . $user->resume)}}" target="_blank">View Resume</a></td>
  </tr>
</table>

</div>

@endsection
