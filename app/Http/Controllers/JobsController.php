<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function apply() {

        return view("job-form");

    }


    public function postApply(Request $request)
    {
        $this->validate($request, array(
            'designation' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ));

        $job = new Job();

        if($file = $request->file('resume')) {
            $imageName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $file->move($destinationPath, $imageName);
            $job->resume = $imageName;
        }

        $job->first_name = $request->first_name;
        $job->last_name = $request->last_name;
        $job->address_one = $request->address_one;
        $job->address_two = $request->address_two;
        $job->city = $request->city;
        $job->state = $request->state;
        $job->postal = $request->postal;
        $job->country = $request->country;
        $job->email = $request->email;
        $job->area_code = $request->area_code;
        $job->phone = $request->phone_no;
        $job->designation = $request->designation;
        $job->start_date = $request->start_date;
        $job->save();

        return redirect()->route('job')
                        ->with('success','Application Submitted successfully.');
    }
}
