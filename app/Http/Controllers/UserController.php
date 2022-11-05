<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //direct user home page
    public function userHomePage()
    {
        return view('user.home');
    }
}
