<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function save (Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
        ]);
    	DB::table('contact_us')->insert([
    		'contact_us_name' => $request->name,
    		'contact_us_email' => $request->email,
    		'contact_us_phone' => $request->phone_number,
    		'contact_us_msg' => $request->message,
    		'contact_us_status' => 0
    	]);
    	return redirect('/contact_us')->withMessage('Success!');
    }
}
