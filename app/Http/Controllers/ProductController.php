<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function upload() {
    	return view('product-admin');
    }
    public function proses(Request $request) {
    	$this->validate($request, [
    		'name' => 'required',
    		'keterangan' => 'required',
    		'image' => 'required|image',
    		'link' => 'required',
    	]);
    	$file = $request->file('image');
    	$tujuan_upload = 'data_file';
    	$file->move($tujuan_upload,$file->getClientOriginalName());
    	$directory = $tujuan_upload."/".$file->getClientOriginalName();
    	DB::table('products')->insert([
    		'product_name' => $request->name,
    		'product_desc' => $request->keterangan,
    		'product_img' => $directory,
    		'product_technical_spec' => $request->link,
    	]);

    	return redirect('/product_list');
    }
    public function viewProduct(){
    	$product = DB::table('products') -> get();
    	return view('product', ['product' => $product]);
    }
}
