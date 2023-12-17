<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Babysitter;
use App\Models\Appointment;

class HomeController extends Controller
{

    
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home'); 
        }
        else
        {
            $babysitter = babysitter::all();
            return view('home.userpage',compact('babysitter'));
        }
    }

    public function index()
        {
            if(Auth::id()){
                return view('admin.home');
            }
            else

            $babysitter = babysitter::all(); 
            return view('home.userpage',compact('babysitter'));
        }

    public function pappointment(Request $request){
        $data = new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->babysitter=$request->babysitter;
        $data->message=$request->message;
        $data->status='In Progress';

        $data->user_id=Auth::user()->id;

        $data->save();

        return redirect()->back()->with('message','Appointment Requested!');
    }
    public function myappointment(){
        if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
            return view('home.my_appointment',compact('appoint'));
        }else{
            return redirect()->back();
        }
        
    }

    public function cancel_appointment($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}

    