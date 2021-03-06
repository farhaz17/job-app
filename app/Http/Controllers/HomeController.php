<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Job::get();
        return view("application-list", compact('users'));
    }

    public function edit($id)
    {
        $user = Job::where('id',$id)->first();
        return view("home", compact('user'));
    }

    public function destroy($id)
    {
        Job::destroy($id);

        return redirect()->route('home')
                        ->with('success','Deleted successfully');
    }

    public function profile($id)
    {
        $user = Job::where('id', $id)->first();
        return view("profile", compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'designation' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ));

        $job = Job::findOrFail($id);

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
        $job->area_code = $request->area_code;
        $job->phone = $request->phone_no;
        $job->designation = $request->designation;
        $job->start_date = $request->start_date;
        $job->save();

        return redirect()->route('home')
                        ->with('success','Details updated successfully.');
    }
}
