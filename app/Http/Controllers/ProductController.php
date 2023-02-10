<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('/dashboard')->with('products',$products);
    }
    public function dahses()
    {
        $products = Product::all();
        //return $products;
         return view('/dashboard')->with('products',$products);
    }
    public function caffe(){
        $products = Product::all();
        return view('welcome')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Product::create($input);
        return redirect('/product')->with('flash_message','Product addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $prd = Product::find($id);
        // return $prd;
         return view("product.show")->with('prd',$prd);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prd = Product::find($id);
        // return $prd;
         return view("product.edit")->with('prd',$prd);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $product = Product::find($id);
        $input=$request->all();
        $product->update($input);
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Product::destroy($id);
        return redirect('product');
    }
}
