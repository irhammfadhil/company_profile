<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InquiryListController extends Controller
{
    public function getAllInquiries() {
        $user = Auth::user()->name;
        $roles = DB::table('users')->select('role')->where('name', $user)->value('role');
        if (strcmp($roles,"admin") != 0) {
            return redirect('/');
        }
        else {
            #$data = 'abc'
            $inquiry = DB::table('contact_us')->paginate(10);
            return view('contact_us_list', ['inquiry' => $inquiry]);
        }
    }
    public function markAsDone($id) {
        $user = Auth::user()->name;
        $roles = DB::table('users')->select('role')->where('name', $user)->value('role');
        if (strcmp($roles,"admin") != 0) {
            return redirect('/');
        }
        else {
            DB::table('contact_us')->where('contact_us_id',$id)->update([
                'contact_us_status' => 1,
            ]);
            return redirect('/contact_us_list');
        }
    }
}
