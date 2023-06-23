<?php

namespace App\Http\Controllers;

use App\Models\PerfumeProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $perfumeProducts = PerfumeProduct::all();
        return view('user_pages.home', compact('perfumeProducts'));
    }
    public function search(Request $request)
    {
        $searchQuery = $request->input('search_query');
        $perfumeProducts = PerfumeProduct::where('perfume_name', 'like', '%' . $searchQuery . '%')
            ->orWhere('perfume_desc', 'like', '%' . $searchQuery . '%')
            ->get();

        return view('user_pages.search-results', compact('perfumeProducts', 'searchQuery'));
        
    }

}