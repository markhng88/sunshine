<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Babysitter;

class UserController extends Controller
{
    public function appointmentview(){
        
        $babysitter = babysitter::all(); 
        return view('home.appointment',compact('babysitter'));
    }
}
