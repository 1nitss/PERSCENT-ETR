<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductDescController extends Controller
{
    public function create(Request $request)
    {
        $product_name = $request->input('product_name');
        $product_desc = $request->input('product_desc');
        $product_price = $request->input('product_price');
        $product_id = $request->input('product_id');

        $product_image = $request->input('product_image');


         $comments = Comment::where('product_id', $product_id)->get();
// Format the date_created for each comment
foreach ($comments as $comment) {
    $comment->formatted_date = Carbon::parse($comment->date_created)->format('F d, Y g:iA');
}
        return view('user_pages.product_desc', compact('product_name', 'product_desc', 'product_price', 'product_id', 'product_image', 'comments'));
    }
}
