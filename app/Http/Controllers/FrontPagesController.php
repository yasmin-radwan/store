<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\View;

class FrontPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::limit(7)->get();
        return view('index',compact('categories'));
    }

    public function products()
    {
        $products = Product::paginate(15);
        $categories = Category::all();
        return view('shop',compact('products','categories'));
    }

    public function similar($category_id)
    {
        $products = Product::where('category_id',$category_id)->get();
        $categories = Category::all();
        return view('shop',compact('products','categories'));
    }

    public function productDetails(Product $product)
    {

        //$product = Product::find($id);
        //dd($product);
        $similar_products = Product::where('category_id',$product->category_id)
            ->where('id','<>',$product->id)->limit(6)->get();

        //dd($product->comments->toArray());
        return view('product-details', compact('product','similar_products'));
    }

    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
