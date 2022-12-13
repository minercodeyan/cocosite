<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        if(!$request->all()){
            return view('products-page',
                ['products'=>Product::all(), 'categories'=>Category::all()]
            );
        }
        return view('products-page',
            ['products'=>Product::whereIn('category_id',array_keys($request->all()))->get(), 'categories'=>Category::all()]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $sameProducts = Product::where('category_id','=',$product->category_id)->where('id','!=',$product->id)->take(3)->get();

        return view('product-page',
            ['product'=> $product, 'sameProducts'=>$sameProducts
            ]);
    }

}
