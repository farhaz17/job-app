@extends('layouts.user')

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
<form class="user" method="post" action="{{ url('job') }}"  enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Full Name <span class="red-star">★</span>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
        <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}" placeholder="First Name" required>
        </div>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}" placeholder="Last Name" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Current Address <span class="red-star">★</span>
        </div>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="address_one" value="{{old('address_one')}}" placeholder="Street Address">
            <input type="text" class="form-control mt-2" name="address_two" value="{{old('address_two')}}" placeholder="Street Address Line 2">
            <div class="row">
            <div class="col-sm-6 mt-2">
                <input type="text" class="form-control" name="city" value="{{old('city')}}" placeholder="City">
            </div>
            <div class="col-sm-6 mt-2">
                <input type="text" class="form-control" name="state" value="{{old('state')}}" placeholder="State/Province">
            </div>
            <div class="col-sm-6 mt-2">
                <input type="text" class="form-control" name="postal" value="{{old('postal')}}" placeholder="Postal/Zip Code">
            </div>
            <div class="col-sm-6 mt-2">
            <select id="country" name="country" class="form-control">
                <option value="" disabled selected>Select Country</option>
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="India">India</option>
                <option value="UAE">UAE</option>
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
        <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Phone Number <span class="red-star">★</span>
        </div>
        <div class="col-sm-3 mb-3 mb-sm-0">
            <input type="text" class="form-control" name="area_code" value="{{old('area_code')}}" placeholder="Area Code" required>
        </div>
        <div class="col-sm-5 mb-3 mb-sm-0">
            <input type="text" class="form-control" name="phone_no" value="{{old('phone')}}" placeholder="Phone Number" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Applying For Position <span class="red-star">★</span>
        </div>
        <div class="col-sm-8 mb-3 mb-sm-0">
        <select id="designation" name="designation" class="form-control">
                <option value="" disabled selected>Select Position</option>
                <option value="Software Developer" >Software Developer</option>
                <option value="Accountant">Accountant</option>
                <option value="Banking">Banking</option>
                <option value="Sales Executive">Sales Executive</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Start Date
        </div>
        <div class="col-sm-8 mb-3 mb-sm-0">
        <input type="date" class="form-control" name="start_date" value="{{old('start_date')}}" placeholder="Start Date">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            Upload Resume <span class="red-star">★</span>
        </div>
        <div class="col-sm-8 mb-3 mb-sm-0">
        <input type="file" class="form-control-file " name="resume" placeholder="" required>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary col-md-3 mt-3" value="Submit">
    </div>
</form>
@endsection
