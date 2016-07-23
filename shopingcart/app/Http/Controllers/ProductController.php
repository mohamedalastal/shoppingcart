<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Products;
use App\Cart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::get();
       $products=Products::get();
       return view('product.index',compact('products','carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carts = Cart::get();
       $product= new Products;
       return view('product.create',compact('product','carts'));
    }


   // public function uploadfile($image)
   // {
   //       $destinationPath='upload';

   //      if ($request->hasFile($image)){
   //          $file =$request->file($image);
            
   //          $file_name = str_random(10).".".$file->getClientOriginalExtension();
   //          $file->move($destinationPath, $file_name);
            
   //          return $file_name;
   //      }
   // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $input = $request->all();
        $product = new Products($input);
        $destinationPath='upload/files';

       if ($request->hasFile('image')){
            $file =$request->file('image');
            
            $file_name = str_random(10).".".$file->getClientOriginalExtension();
            $file->move($destinationPath, $file_name);
            $product->image = $file_name;
        }
        $product->save();


        return redirect()->route('product.index');

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
