<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Products;
use App\ProductQuantity;
use App\Cart;
use App\ProductService;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    { 
        $carts = Cart::get();


        $product = products::find($id);
        if( $product->type == 'quntity'){
          return view('cart.quntity.create',compact('product','carts'));
        }elseif($product->type  == 'service'){
          return view('cart.service.create',compact('product','carts'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_quntity(Request $request)
    {
        $input = $request->all();
        $product = new ProductQuantity($input);
        $product->save();

        $cart = new Cart();
        $cart->product_id = $product->product_id;
        $cart->type ='quntity';
        $cart->type_id=$product->id;
        $cart->save();



        return redirect()->route('product.index');
    }

    public function store_service(Request $request)
    {
        $input = $request->all();
        $product = new ProductService($input);
        $product->save();


        $cart = new Cart();
        $cart->product_id = $product->product_id;
        $cart->type ='service';
        $cart->type_id=$product->id;
        $cart->save();

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
      $cart=Cart::find($id);

      if($cart->type == 'quntity')
      {
        ProductQuantity::destroy($cart->type_id);
        Cart::destroy($id);
      }
      elseif($cart->type == 'service')
     {
        ProductService::destroy($cart->type_id);
        Cart::destroy($id);
     }

             return redirect()->route('product.index');

    }
}
