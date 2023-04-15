<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */


    public function index(Request $request,$categorySlug)
    {

        if(!$category = Category::where('slug',$categorySlug)->first()){
            throw new NotFoundHttpException();
        }



        if(!$request->all()){
            return view('products-page',
                ['products'=>Product::where('category_id',$category->id)->get(), 'category'=>$category]
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
    public function show($categorySlug,$id)
    {
        $product = Product::findOrFail($id);
        $sameProducts = Product::where('category_id','=',$product->category_id)->where('id','!=',$product->id)->take(3)->get();

        return view('product-page',
            ['product'=> $product, 'sameProducts'=>$sameProducts
            ]);
    }

    public function catalog()
    {
        return view('catalog',
        ['categories'=> Category::all()]);
    }

}
