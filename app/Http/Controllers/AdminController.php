<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use App\Models\projects;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\GlobalState\Restorer;

class AdminController extends Controller
{
    //direct to message pannel
    public function messagePannel()
    {
        $contactData = contacts::orderBy('created_at','desc')->get();
        return view('admin.message',compact('contactData'));
    }

    //message details
    public function messsageDetails($requestedId)
    {
        $contactData = contacts::get();
        $messageDetail = contacts::where('id',$requestedId)->first();
        return view('admin.messagedetails',compact(['messageDetail','contactData']));
    }

    //delete message
    public function deleteMessage($requestedId)
    {
        contacts::where('id',$requestedId)->delete();
        return back();
    }

    //direct to projects upload page
    public function projectsUploadPage()
    {
        $contactData = contacts::get();
        return view('admin.projectsupload',compact('contactData'));
    }

    //upload project
    public function projectUpload(Request $request)
    {
        $this->projectDataValidate($request);
        $arrayData = $this->getArrayData($request);

        if($request->hasFile('projectImage'))
        {
            $uniqueImageName = uniqid().$request['projectImage']->getClientOriginalName();
            $arrayData['image'] = $uniqueImageName;

            $request->file('projectImage')->storeAs('public',$uniqueImageName);

            projects::create($arrayData);
        }

        return back()->with(['status' => 'Project Uploading Success!']);
    }

    //admin register page
    public function registerPage()
    {
        return view('admin.register');
    }

    //admin login page
    public function loginPage()
    {
        return view('admin.login');
    }

    //project data validation
    private function projectDataValidate(Request $request)
    {
        return $request->validate([
            'projectName' => 'unique:projects,name|required',
            'projectImage' => 'image|file|required',
        ]);
    }

    //get array data for db
    private function getArrayData(Request $request)
    {
        return [
            'name' => $request->projectName,
            'image' => $request->projectImage,
        ];
    }
}
