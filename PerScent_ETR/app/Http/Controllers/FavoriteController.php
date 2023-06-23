<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;


class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $product_id = $request->input('product_id');
        $user_id = auth()->user()->id;
    
        // Check if the product is already in the favorites
        $existingFavorite = Favorite::where('product_id', $product_id)
            ->where('user_id', $user_id)
            ->first();
    
        if ($existingFavorite) {
            return redirect()->back()->withErrors(['Product already in favorites.']);
        }
    
        // Product details
        $product_name = $request->input('product_name');
        $product_desc = $request->input('product_desc');
        $product_image = $request->input('product_image');
    $product_price = $request->input('product_price');
        // Create the favorite
        Favorite::create([
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_desc' => $product_desc,
            'product_image' => $product_image,
            'user_id' => $user_id,
            'price' => $product_price,
        ]);
    
        return redirect()->back()->with('success', 'Product added to favorites.');
    }
    public function index()
{
    $user_id = auth()->user()->id;
    $favorites = Favorite::where('user_id', $user_id)->get();

    return view('user_pages.user-favorites', compact('favorites'));
}

}
