<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Image;

class ProductController extends Controller
{

    public function upload() {
    	return view('product-admin');
    }
    public function proses(Request $request) {
        $user = Auth::user();
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
            $fileName = $file->getClientOriginalName();
            $resized = Image::make($file->path());
            $resized->resize(800,800)->save(public_path($tujuan_upload.'/'.$fileName));
	    	#$file->move($tujuan_upload,$file->getClientOriginalName());
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
    	return view('coba', ['product' => $product]);
    }

	public function viewProductAdmin(){
        $user = Auth::user()->name;
        $roles = DB::table('users')->select('role')->where('name', $user)->value('role');
        if (strcmp($roles,"admin") != 0) {
            return redirect('/');
        }
        else {
            $product = DB::table('products')->paginate(10);
            return view('product-admin-list', ['product' => $product]);
        }
    }

    public function edit($id){
    	$product = DB::table('products')->where('product_id',$id)->get();
    	return view('product-admin-edit', ['product' => $product]);
    }

    public function updateProduct(Request $request, $id/*, $nama_asal*/) {
        //$base_name = $nama_asal;
        $product = DB::table('products')->select('product_name')->where('product_name', $request->name)->value('product');
        /*if(!empty($product) && strcmp($request->name, $base_name) != 0) {
            return redirect('/product_list')->withMessage('Product exists!');
        }
        else {*/
            $file = $request->file('image');
            $tujuan_upload = 'data_file';
            if (is_null($file)) {
                DB::table('products')->where('product_id',$id)->update([
                'product_name' => $request->name,
                'product_desc' => $request->keterangan,
                'product_price' => $request->price,
                'product_technical_spec' => $request->link,
                ]);
            }
            else {
                $fileName = $file->getClientOriginalName();
                $resized = Image::make($file->path());
                $resized->resize(800,800)->save(public_path($tujuan_upload.'/'.$fileName));
                #$file->move($tujuan_upload,$file->getClientOriginalName());
                $directory = $tujuan_upload."/".$file->getClientOriginalName();
                DB::table('products')->where('product_id',$id)->update([
                'product_name' => $request->name,
                'product_desc' => $request->keterangan,
                'product_img' => $directory,
                'product_price' => $request->price,
                'product_technical_spec' => $request->link,
                ]);
            }
            return redirect('/product_list')->withMessage('Data successfully updated!');
        //}
    }
    public function deleteProduct($id) {
    	DB::table('products')->where('product_id',$id)->delete();
    	return redirect('/product_list')->withMessage('Delete successful!');
    }

    public function showSpecs(Request $request) {
        $ids = $request->id;
        $query = DB::table('product_details')->join('products', 'products.product_id', '=', 'product_details.product_id')
        ->select('products.product_name', 'product_details.purity', 'product_details.element_purity', 'product_details.packaging')
        ->where('products.product_id', $ids)
        ->get();
        #return $query;
        return view('spec', compact('query'));
    }
}