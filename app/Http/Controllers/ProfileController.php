<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('users.profile');
    }

    public function store(Request $request){
        
    }


}
