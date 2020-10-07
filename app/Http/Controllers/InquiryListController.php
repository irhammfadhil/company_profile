<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InquiryListController extends Controller
{
    public function getAllInquiries() {
        #$data = 'abc'
    	$inquiry = DB::table('contact_us') -> get();
    	return view('contact_us_list', ['inquiry' => $inquiry]);
    }
    public function markAsDone($id) {
	    DB::table('contact_us')->where('contact_us_id',$id)->update([
			'contact_us_status' => 1,
		]);
		return redirect('/contact_us_list');
    }
    public function checkSession(Request $request) {
        $data = $request->session()->get('user_agent');
        echo $data;
    } 
}
