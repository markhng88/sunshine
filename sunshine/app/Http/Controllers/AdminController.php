<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Babysitter;
use App\Models\Appointment;
class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_babysitter');
    }

    public function upload(Request $request){

        $babysitter=new babysitter;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('babysitterimage',$imagename);
        $babysitter->image=$imagename;
        
        $babysitter->name=$request->name;
        $babysitter->phone=$request->number;
        $babysitter->age=$request->age;
        $babysitter->description=$request->description;

        $babysitter->save();
        return redirect()->back()->with('message','Babysitter Added');


    }

    public function showappointment(){
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function approve($id){
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }
    public function cancel($id){
        $data=appointment::find($id);
        $data->status='Cancel';
        $data->save();
        return redirect()->back();
    }
}
