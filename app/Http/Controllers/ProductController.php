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
            'price' => 'required',
    		'link' => 'required',
    	]);
    	#check produck is exists or not
    	$product = DB::table('products')->select('product_name')->where('product_name', $request->name)->value('product');
    	if(!empty($product)) {
    		return redirect('/product_list')->withMessage('Product exists!');
    	}
    	else {
			$file = $request->file('image');
	    	$tujuan_upload = 'data_file';
	    	$file->move($tujuan_upload,$file->getClientOriginalName());
	    	$directory = $tujuan_upload."/".$file->getClientOriginalName();
	    	DB::table('products')->insert([
	    		'product_name' => $request->name,
	    		'product_desc' => $request->keterangan,
	    		'product_img' => $directory,
                'product_price' => $request->price,
	    		'product_technical_spec' => $request->link,
	    	]);

	    	return redirect('/product_list');
    	}
    }
    public function viewProduct(){
    	$product = DB::table('products') -> get();
    	return view('product', ['product' => $product]);
    }

	public function viewProductAdmin(){
    	$product = DB::table('products')->paginate(10);
    	return view('product-admin-list', ['product' => $product]);
    }

    public function edit($id){
    	$product = DB::table('products')->where('product_id',$id)->get();
    	return view('product-admin-edit', ['product' => $product]);
    }

    public function updateProduct(Request $request, $id) {
        $product = DB::table('products')->select('product_name')->where('product_name', $request->name)->value('product');
        if(!empty($product)) {
            return redirect('/product_list')->withMessage('Product exists!');
        }
        else {
            $file = $request->file('image');
            $tujuan_upload = 'data_file';
            if (is_null($file)) {
                DB::table('products')->where('product_id',$id)->update([
                'product_name' => $request->name,
                'product_desc' => $request->keterangan,
                'product_technical_spec' => $request->link,
                ]);
            }
            else {
                $file->move($tujuan_upload,$file->getClientOriginalName());
                $directory = $tujuan_upload."/".$file->getClientOriginalName();
                DB::table('products')->where('product_id',$id)->update([
                'product_name' => $request->name,
                'product_desc' => $request->keterangan,
                'product_img' => $directory,
                'product_technical_spec' => $request->link,
                ]);
            }
            return redirect('/product_list');
        }
    }
    public function deleteProduct($id) {
    	DB::table('products')->where('product_id',$id)->delete();
    	return redirect('/product_list');
    }
}
