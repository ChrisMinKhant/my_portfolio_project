<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class UserController extends Controller
{
    //direct user home page
    public function userHomePage()
    {
        return view('user.home');
    }

    //direct user about page
    public function userAboutPage()
    {
        return view('user.about');
    }

    //direct user projects page
    public function userProjectsPage()
    {
        return view('user.projects');
    }

    //direct user contact page
    public function userContactPage()
    {
        return view('user.contact');
    }

    //send message from user
    public function sendMessage(Request $request)
    {
        $this->dataValidation($request);
        $arrayData = $this->getArray($request);
        contacts::create($arrayData);
    }

    //data validation for user message
    private function dataValidation(Request $request)
    {
        return $request->validate([
            'userName' => 'alpha_dash|required',
            'userEmail' => 'email|required',
            'userPhoneNumber' => 'numeric|max_digits:16|required',
            'userMessage' => 'required',
        ]);
    }

    //get array data to upload to database
    private function getArray(Request $request)
    {
        return [
            'name' => $request->userName,
            'email' => $request->userEmail,
            'phone' => $request->userPhoneNumber,
            'message' => $request->userMessage,
        ];
    }
}
