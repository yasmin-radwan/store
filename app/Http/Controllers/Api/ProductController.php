<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return ProductResource::collection(Product::all());
    }

    public function show(Product $product){
        return new ProductResource($product);
    }

    public function store(Request $request){
        $rules = [
            'name'=> 'required|max:10',
            'category_id' => 'required|integer',
            'discount'=>'required|integer',
            'short_description'=>'required',
            'details'=>'required',
            'price'=>'required|integer',
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response([
                'status' => 'error',
                'errors'=> $validator->errors()
            ]);
        }


        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'short_description' => $request->short_description,
            'details' => $request->details,
            'price' => $request->price,
            'discount' => $request->discount,
            'user_id' => '1',
        ]);

        return response([
            'status'=>'success',
            'product'=>$product
        ]);
    }

    public function update(Request $request,Product $product){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->short_description = $request->short_description;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->discount = $request->discount;

        $product->save();

        return response([
            'status'=>'updated',
            'product' => $product
        ]);
    }

    public function destroy(Product $product){
        $product->delete();
        return response([
            'status'=>'deleted',
            'product' => $product
        ]);
    }
}
