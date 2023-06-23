<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'perfume_name' => 'required',
            'perfume_desc' => 'required',
            'perfume_price' => 'required',
            'stocks' => 'required',
            'perfume_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $product = Product::find($id);
        
        // Update other fields as needed
        $product->perfume_name = $validatedData['perfume_name'];
        $product->perfume_desc = $validatedData['perfume_desc'];
        $product->perfume_price = $validatedData['perfume_price'];
        $product->stocks = $validatedData['stocks'];
        
        // Handle image upload
        if ($request->hasFile('perfume_image')) {
            $image = $request->file('perfume_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('perfume'), $imageName);
            $product->perfume_image = $imageName;
        }
    
        $product->save();
    
        return redirect('/manage-product')->with('success', 'Product updated successfully.');
    }
    

    public function delete($id)
    {
        DB::table('perfume_products')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }
    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'perfume_name' => 'required',
            'perfume_desc' => 'required',
            'perfume_price' => 'required',
            'stocks' => 'required',
            'perfume_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('perfume_image')) {
            $image = $request->file('perfume_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('perfume'), $imageName);
        }

        DB::table('perfume_products')->insert([
            'perfume_name' => $validatedData['perfume_name'],
            'perfume_desc' => $validatedData['perfume_desc'],
            'perfume_price' => $validatedData['perfume_price'],
            'stocks' => $validatedData['stocks'],
            'perfume_image' => $imageName,
        ]);

        return redirect()->back()->with('congrats', 'Product added successfully');
    }

}
