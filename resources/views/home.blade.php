@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success m-2">
        <div>{{ $message }}</div>
    </div>
@endif
<form class="user" method="post" action="{{ route('user.update', $user->id) }}"  enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Full Name <span class="red-star">★</span>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
        <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" placeholder="First Name">
        </div>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Current Address <span class="red-star">★</span>
        </div>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="address_one" value="{{$user->address_one}}" placeholder="Street Address">
            <input type="text" class="form-control mt-2" name="address_two" value="{{$user->address_two}}" placeholder="Street Address Line 2">
            <div class="row">
            <div class="col-sm-6 mt-2">
                <input type="text" class="form-control" name="city" value="{{$user->city}}" placeholder="City">
            </div>
            <div class="col-sm-6 mt-2">
                <input type="text" class="form-control" name="state" value="{{$user->state}}" placeholder="State/Province">
            </div>
            <div class="col-sm-6 mt-2">
                <input type="text" class="form-control" name="postal" value="{{$user->postal}}" placeholder="Postal/Zip Code">
            </div>
            <div class="col-sm-6 mt-2">
            <select id="country" name="country" class="form-control">
                <option value="" disabled selected>Select Country</option>
                <option value="Afganistan" {{ $user->country == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                <option value="Albania" {{ $user->country == 'Albania' ? 'selected' : '' }}>Albania</option>
                <option value="Algeria" {{ $user->country == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                <option value="American Samoa" {{ $user->country == 'American Samoa' ? 'selected' : '' }}>American Samoa</option>
                <option value="Andorra" {{ $user->country == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                <option value="India" {{ $user->country == 'India' ? 'selected' : '' }}>India</option>
                <option value="UAE" {{ $user->country == 'UAE' ? 'selected' : '' }}>UAE</option>
            </select>
            </div>
            </div>
        </div><br>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Email Address <span class="red-star">★</span>
        </div>
        <div class="col-sm-8 mb-3 mb-sm-0">
        <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Email Address" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Phone Number <span class="red-star">★</span>
        </div>
        <div class="col-sm-3 mb-3 mb-sm-0">
            <input type="text" class="form-control" name="area_code" value="{{$user->area_code}}" placeholder="Area Code" required>
        </div>
        <div class="col-sm-5 mb-3 mb-sm-0">
            <input type="text" class="form-control" name="phone_no" value="{{$user->phone}}" placeholder="Phone Number" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Applying For Position <span class="red-star">★</span>
        </div>
        <div class="col-sm-8 mb-3 mb-sm-0">
        <select id="designation" name="designation" class="form-control">
                <option value="" disabled selected>Select Position</option>
                <option value="Software Developer" {{ $user->designation == 'Software Developer' ? 'selected' : '' }}>Software Developer</option>
                <option value="Accountant" {{ $user->designation == 'Accountant' ? 'selected' : '' }}>Accountant</option>
                <option value="Banking" {{ $user->designation == 'Banking' ? 'selected' : '' }}>Banking</option>
                <option value="Sales Executive" {{ $user->designation == 'Sales Executive' ? 'selected' : '' }}>Sales Executive</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Start Date
        </div>
        <div class="col-sm-8 mb-3 mb-sm-0">
        <input type="date" class="form-control" name="start_date" value="{{$user->start_date}}" placeholder="Start Date">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Upload Resume <span class="red-star">★</span>
        </div>
        <div class="col-sm-8 mb-3 mb-sm-0">
        <input type="file" class="form-control-file " name="resume" value="{{$user->resume}}" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary col-md-3 mt-3" value="Update">
    </div>
</form>
@endsection
