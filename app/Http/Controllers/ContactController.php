<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
           'name' => 'required',
           'email' => 'email|required',
           'company' => 'required',
           'phone' => 'required',
           'message' => 'required'
        ]);


        if($validator->fails()) {
            $errors = $validator->errors()->first();
            return response(['errors' => $errors]);
        }

        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'message' => $request->message
        ]);


        return response(['success' => 'Thank you! Your message is successfully sent.']);
    }

    public function change($language)
    {
        App::setLocale($language);
        session()->put('locale', $language);

        return redirect()->back();
    }
}
