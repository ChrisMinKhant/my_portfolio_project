<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //direct to message pannel
    public function messagePannel()
    {
        $contactData = contacts::get();
        return view('admin.message',compact('contactData'));
    }

    //delete message
    public function deleteMessage($requestedId)
    {
        contacts::where('id',$requestedId)->delete();
        return back();
    }
}
