<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use Cart;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total=Cart::total();
        $tax=Cart::tax();
            $cart=Cart::content();
            $subtotal=Cart::subtotal();
            $count=Cart::count();

        return view('frontend.cart',compact('cart','total','tax','subtotal','count'));


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


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro= (new \App\Product)->findOrFail($id);
         Cart::add(['id' => $pro->id, 'name' => $pro->P_name, 'qty' => 1, 'price' => $pro->P_total_retail_price,'options' => ['img' => $pro->photo->file],
            'tax' =>$pro->P_retail_tax_id ])->associate('Product');
          return Cart::content();
//        return redirect('/');
//        $data= Cart::content();
//        return json_encode($data);

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
       /* Cart::remove($id);*/

        return "hello";

    }

    public function removeitem($id,$qty)
    {

      Cart::update($id,$qty-1);
      return redirect('/cart');

    }


    public function additem($id,$qty)
    {

        Cart::update($id,$qty+1);
        return redirect('/cart');

    }


    public function deleteitem($id){

        Cart::remove($id);
        return redirect('/cart');

    }




}
