<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('products');
           // Set Meta Home
           metaGenerate($metaBanner);
           $query =  \App\Models\Product::Latest();
           if (request()->category) {
               $categoryId = request()->category;
               $query = $query->where('category_id', $categoryId);
           }
        //    if (request()->has('category')) {
        //    }

        return view('front.products.index',[
            'products' =>  $query->get(),
            'categories' => \App\Models\Category::get(),
            'metaBanner' => $metaBanner
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('products');
           // Set Meta Home
           metaGenerate($metaBanner);
           $product = \App\Models\Product::findOrFail($id);
        return view('front.products.show',[
            'product' => $product ,
            'metaBanner' => $metaBanner,
            'relatedProducts' => Product::where('category_id',$product->category_id)->where('id','!=',$id)->get()
        ]);
    }
}
