<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Home page view.
     */
    public function index()
    {
        return view('pages.home.index');
    }

    /**
     * Show the Features page (with product list).
     */
    public function features()
    {
        $products = Product::latest()->get();
        return view('pages.features.index', compact('products'));
    }

    /**
     * Show the Pricing page.
     */
    public function pricing()
    {
        return view('pages.pricing');
    }

    /**
     * Show the Docs page.
     */
    public function docs()
    {
        return view('pages.docs');
    }

    /**
     * Show a single product details page.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.features.show', compact(var_name: 'product'));
    }
}