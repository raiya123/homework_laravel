<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class ProfieController extends Controller
{
    public function showUserName(){
        $profile = Profile::all();
        return view('User.showUser',compact('profile'));
    }
}
