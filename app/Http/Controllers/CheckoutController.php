<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $cart=Cart::content();
        $user=Auth::user();
       $address=$user->address()->get();
        return view('frontend.checkout',compact('address','cart'));
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
        $add=$request->all();
        $user=Auth::user();
        $user->address()->create($add);


       return redirect('/checkout');
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

    public function test(Request $request){
        $id=$request->id;
        $address=Address::findOrFail($id);
       $request-> session()->put('add',$address);

//           common session mai dalna padega

    }

    public function payment(){
        $cart=Cart::content();
        $subtotal=Cart::subtotal();
        $total= Cart::total();
        return view('frontend.payment',compact('cart','total','subtotal'));
    }

    public function paymentinfo(Request $request){



        $payment=Session::get('add');
        $payment['payment']=$request->payment;

        Session::put('add', $payment);


//        Session::push('reserveringen', array('car' => $reservation['car']));




    }


}
