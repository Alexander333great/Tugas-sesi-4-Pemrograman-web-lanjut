<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller {
    public function index(Request $request) {
        $category = $request->get('category');
        $portfolios = Portfolio::when($category, fn($q) => $q->where('category', $category))
            ->latest()->paginate(6);
        $categories = Portfolio::select('category')->distinct()->pluck('category');
        
        return view('portfolio.index', compact('portfolios', 'categories', 'category'));
    }

    public function show($slug) {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        $related = Portfolio::where('category', $portfolio->category)
            ->where('id', '!=', $portfolio->id)->take(3)->get();
            
        return view('portfolio.show', compact('portfolio', 'related'));
    }
}