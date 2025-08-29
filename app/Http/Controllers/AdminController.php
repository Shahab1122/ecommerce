<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    public function product()
    {
         return view('admin.product');
    }

 public function uploadproduct(Request $request)  // ✅ correct spelling
{
    $data = new Product; 

    $image = $request->file('file');
    $imagename = time().'.'.$image->getClientOriginalExtension();
    $image->move('productimage', $imagename);

    $data->image = $imagename;
    $data->title = $request->title;
    $data->price = $request->price;
    $data->description = $request->des; // make sure form field name = "des"
    $data->quantity = $request->quantity;
    
    $data->save();

    return redirect()->back()->with('success', 'Product uploaded successfully!');
}

public function showproduct()
    {
        $data=product::all();
         return view('admin.showproduct',compact('data'));
    }
public function deleteproduct($id)
{
    $data=product::find($id);

    $data->delete();

    return redirect()->back();
}

}
