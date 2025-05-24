<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('home', [
            'products' => Product::hasStock()
                ->take(25)
                ->latest()
                ->get()
        ]);
    }

    /**
     * Fetch products for the listing page.
     *
     * @param Request $request
     * @return string|bool
     */
    public function listing(Request $request)
    {
        $page = $request->get('page', 1);

        $products = Product::hasStock()
            ->skip(($page - 1) * 25)
            ->take(25)
            ->latest()
            ->get();

        if (empty($products)) {
            return FALSE;
        }

        $fetched_product = '';

        foreach ($products as $product) {
            $fetched_product .= view('components.product-card', compact('product'))->render();
        }

        return $fetched_product;
    }
    
    public function show(Product $product)
    {
        return view('product', compact('product'));
    }
}
