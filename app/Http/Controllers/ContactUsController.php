<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function save (Request $request) {
    	DB::table('contact_us')->insert([
    		'contact_us_name' => $request->name,
    		'contact_us_email' => $request->email,
    		'contact_us_phone' => $request->phone_number,
    		'contact_us_msg' => $request->message
    	]);
    	return redirect('/');
    }
}
